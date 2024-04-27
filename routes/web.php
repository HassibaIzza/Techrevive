<?php

use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\EmailController;

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
Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');

Route::post('/fetch-states/{id}', [App\Http\Controllers\EmailController::class, 'fetchStates'])->name('fetch.states');


Route::post('/fetch-cities/{id}', [App\Http\Controllers\EmailController::class, 'fetchCities'])->name('fetch.cities');

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::fallback(function (){
    return redirect()->route('login');
});

Route::get('/boutique', function () {
    return view('backend.boutique.boutique');
})->name('boutique');

Route::get('/forgot', function () {
    return view('auth.forgot-password');
})->name('forgot');

Route::get('/test-mail', function () {
    Mail::raw('Hello, this is a test mail!', function ($message) {
        $message->to('test@example.com')->subject('Test Mail');
    });
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
require_once __DIR__.'/fabricant.php';


