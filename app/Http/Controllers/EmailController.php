<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use App\Models\Typep;
use App\Models\Typepanne;
use App\Models\RendezVous;
use App\Models\User;
use App\Notifications\BrandOwnerNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
class EmailController extends Controller
{
    public function create()
    {
        $marques = Marque::orderBy('name', 'ASC')->get(); // Utilisez le modèle directement au lieu de DB::table()
        return view('email', ['marques' => $marques]);
    }

    public function fetchStates($marque_id = null)
    {
        $typep = Typep::where('marque_id', $marque_id)->get();
        return response()->json([
            'status' => 1,
            'typep' => $typep
        ]);
    }

    public function fetchCities($typep_id = null)
    {
        $typepanne = Typepanne::where('typep_id', $typep_id)->get();
        return response()->json([
            'status' => 1,
            'typepanne' => $typepanne
        ]);
    }

    public function sendEmail(Request $request)
    {
      $user_id = $request->id;
        $request->validate([
            'email' => 'required|email',
            'adresse' => 'required',
            'name' => 'required',
            'content' => 'required',
            'typepanne' => 'required',
            'marque' => 'required',
            'typep' => 'required',
        ]);

        // Récupérer le nom de la marque à partir de l'ID
        $marque = Marque::find($request->marque);
        $marqueName = $marque ? $marque->name : '';

        $typep = Typep::find($request->typep);
        $typepName = $typep ? $typep->name : '';

        $typepanne = Typepanne::find($request->typepanne);
        $typepanneName = $typepanne ? $typepanne->name : '';

        $gmail = $marque ? $marque->gmail : '';

        $data = [
            'adresse' => $request->adresse,
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content,
            'typepanne' => $typepanneName,
            'typep' => $typepName,
        ];

        // Créer une instance de RendezVous avec les données à enregistrer
        $rendezVous = new RendezVous();
        $rendezVous->mail = $request->email;
        $rendezVous->marque = $request->marque;
        $rendezVous->catégorie = $typepName;
        $rendezVous->panne = $typepanneName;
        $rendezVous->problème = $request->content;
        $rendezVous->nom = $request->name;
        $rendezVous->sujet = $request->adresse;
        $rendezVous->save();

    

        /*Mail::send('email-template', $data, function($message) use ($data) {
          $message->to('hadjerjawan@gmail.com')
          ->subject($data['subject']);
        });*/
        // Envoi de l'email à l'adresse Gmail de la marque
        Mail::send('email-template', $data, function ($message) use ($data, $gmail) {
        $message->to($gmail) // Envoyer à l'adresse Gmail de la marque
          ->subject('Panne d\'un appareil');
  });
      $marque = Marque::find($request->marque);
      if ($marque && $marque->owner_id) {
          $owner = User::find($marque->owner_id);
          if ($owner) {
              $details = "Details about the form submission or any message";
              $owner->notify(new BrandOwnerNotification($details));
          }
      }

      return back()->with(['message' => 'Email sent and notification dispatched!']);
            

       
        //return back()->with(['message' => 'Message envoyé avec succés!']);
         
    
    }
    
}
