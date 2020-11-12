<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


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
})->name('welcome');

Auth::routes();

Route::get('/home',  [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::view('/form', 'form')->name('form');
Route::post('/formcontroller',  [App\Http\Controllers\FormController::class, 'index']);

Route::get('/kursy', [App\Http\Controllers\DataController::class, 'index']);

Route::get('/kalkulator', [App\Http\Controllers\CalculatorController::class, 'index']);


Route::view('profile', 'profile');

Route::get('profile/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'pl'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('profile');
});

Route::post('/cdv', [App\Http\Controllers\CdvController::class, 'index']);
Route::view('form', 'form');


Route::get('/send', function () {

    $details = [
        'title' => 'CDV -email',
        'body' => 'wiadomość testowa',

    ];

    \Mail::to('czuczu442@gmail.com')->send(new \App\Mail\TestMail($details));
    echo 'Wiadmość wysłana pomyślnie';
});
