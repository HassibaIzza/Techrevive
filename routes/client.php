<?php 

use App\Http\Controllers\User\ClientController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;




Route::middleware(['auth', 'auth.role:client'])
    ->prefix('client')
    ->name('client-')
    ->controller(ClientController::class)->group(function (){

        // profile
        Route::view('profile', 'backend.profile.client_profile')->name('profile');
        Route::post('profile/update_image', 'updateImage')->name('profile-image-update');
       

      // fallback
        Route::fallback(function (){
            return redirect('/client/profile');
        })->name('client');
    });