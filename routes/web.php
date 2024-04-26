<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReparateurController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/profile/info/update', 'ProfileController@updateInfo')->name('reparateur-profile-info-update');


Route::get('/', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('register');
});
Route::post('/reparateur/profile/image/update', [ReparateurController::class, 'updateProfileImage'])->name('reparateur-profile-image-update');

Route::post('/reparateur/update-info', 'App\Http\Controllers\User\ReparateurController@updateInfo')->name('reparateur.updateInfo');


Route::get('/reparateurs', [ReparateurController::class, 'index'])->name('reparateurs.index');

Route::get('/login', function () {
    return view('login');
});

Route::fallback(function (){
    return redirect()->route('login');
});


require_once __DIR__.'/auth.php';
require_once __DIR__.'/admin.php';
require_once __DIR__.'/vendor.php';
require_once __DIR__.'/profile.php';
require_once __DIR__.'/user.php';
require_once __DIR__.'/brand.php';
require_once __DIR__.'/category.php';
require_once __DIR__.'/sub_category.php';
require_once __DIR__.'/product.php';
require_once __DIR__.'/coupon.php';
require_once __DIR__.'/notifications.php';
require_once __DIR__.'/socialite.php';
require_once __DIR__.'/reparateur.php';
require_once __DIR__.'/client.php';

