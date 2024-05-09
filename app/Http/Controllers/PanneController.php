<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RendezVous;
use App\Models\Marque;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class PanneController extends Controller
{
    public function index(Request $request)
    {
        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Vérifier si l'utilisateur est un fabricant
        if ($user->role === 'Fabricant') {
            // Récupérer la marque de l'utilisateur
            $marque = Marque::where('owner_id', $user->id)->first();

            // Si la marque est trouvée
            if ($marque) {
                // Récupérer les pannes pour cette marque
                $rendezvous = RendezVous::where('marque', $marque->name)->get();
            } else {
                // Si la marque n'est pas trouvée, renvoyer une liste vide
                $rendezvous = collect();
            }
        } else {
            // Si l'utilisateur n'est pas un fabricant, renvoyer toutes les pannes
            $rendezvous = RendezVous::all();
        }

        // Passer les données à la vue
        return view('backend.les pannes.listepannes', compact('rendezvous'));
    }
}
