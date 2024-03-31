<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/home', function () {
    return view('index');
})->name('index');*/

Route::view('/login', 'login')->name('login');
Route::view('/form', 'inscription')->name('inscription');

Route::get('/view', function () {
    return view('demo');
});

Route::get('/login', function () {
  return view('login');

  
  
});
Route::get('/form', function () {
return view('inscription');



});

Route::get("/home", [HomeController::class,"index"]);





