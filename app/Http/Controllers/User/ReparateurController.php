<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\ReparateurInfoRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class ReparateurController extends UserController
{
    /**
     * Gérer la demande de mise à jour des informations d'un réparateur.
     *
     * @param ReparateurInfoRequest $request
     */
    public function updateInfo(ReparateurInfoRequest $request)
    {
        // Validation
        $data = $request->validated();

        // Préparation des données nécessaires
        $userId = Auth::id();
        $userData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'phone_number' => $data['phone_number'],
            'address' => $data['address']
        ];

        // Mise à jour des données de l'utilisateur
        if ($this->updateUserData($userId, $userData)) {
            return response(['msg' => "Vos informations ont été mises à jour avec succès"], 200);
        } else {
            toastr()->error('Échec de la sauvegarde des modifications, veuillez réessayer.');
            return redirect()->route('reparateur-profile');
        }
    }

    /**
     * Mettre à jour les données de l'utilisateur.
     *
     * @param int   $userId
     * @param array $data
     *
     * @return bool
     */
    private function updateUserData(int $userId, array $data): bool
    {
        return User::findOrFail($userId)->update($data);
    }

    /**
     * Pour retourner l'ID du magasin actuel de l'utilisateur.
     *
     * @param int $userId
     *
     * @return mixed
     */
    public static function getReparateurId(int $userId)
    {
        return DB::table('reparateur_shop')->where('user_id', $userId)->value('reparateur_id');
    }
}
