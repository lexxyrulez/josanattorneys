<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMail;

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

Route::get('/about', 'App\Http\Controllers\Aboutcontroller@about');

Route::get('/welcome', 'App\Http\Controllers\ContactController@contact');
Route::post('/send-message', 'App\Http\Controllers\ContactController@sendEmail')->name('contact.send');

Route::get('/contact', 'App\Http\Controllers\Contactcontroller@contact');

Route::get('/portfolio', 'App\Http\Controllers\Portfoliocontroller@portfolio');

Route::get('/service', 'App\Http\Controllers\Servicecontroller@service');

Route::get('/team', 'App\Http\Controllers\Teamcontroller@team');

