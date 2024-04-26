<?php 

use App\Http\Controllers\User\reparateurController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;




Route::middleware(['auth', 'auth.role:reparateur'])
    ->prefix('reparateur')
    ->name('reparateur-')
    ->controller(reparateurController::class)->group(function (){

        // profile
        Route::view('profile', 'backend.profile.reparateur_profile')->name('profile');
       

      // fallback
        Route::fallback(function (){
            return redirect('/reparateur/profile');
        })->name('reparateur');
    });