<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RendezVous;
use App\Models\Marque;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class PanneController extends Controller
{
    public function index()
    {
        // Récupérer le rôle de l'utilisateur connecté
        $role = Auth::user()->role;

        // Récupérer la marque de l'utilisateur connecté (si applicable)
        $userMarqueId = Auth::user()->marque;

        // Initialiser une variable pour stocker les rendez-vous
        $rendezvous = null;

        // Si l'utilisateur est un fournisseur (vendor) et est associé à une marque
        if ($role === 'vendor' && !is_null($userMarqueId)) {
            // Récupérer les rendez-vous pour la marque de l'utilisateur
            $rendezvous = RendezVous::where('marque', $userMarqueId)->get();
            
            // Récupérer le nom de la marque
            $marque = Marque::where('id', $userMarqueId)->value('name');
        } else {
            // Si l'utilisateur n'est pas un fournisseur ou n'est pas associé à une marque, afficher tous les rendez-vous
            $rendezvous = RendezVous::all();
            $marque = null; // Aucune marque spécifique à afficher
        }

        // Passer les données à la vue
        return view('backend.Les pannes.listepannes', compact('rendezvous', 'marque', 'role'));
    }
}