<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ShortLinkController;
use App\Models\ShortLink;
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

Route::get('/login', AuthController::class . '@loginPage')->name('loginPage');
Route::post('/login', AuthController::class . '@login')->name('login');
Route::get('/register', AuthController::class . '@registerPage')->name('registerPage');
Route::post('/register', AuthController::class . '@register')->name('register');
Route::get('/go/{destination}', ShortLinkController::class . '@go')->name('go');


Route::get('/', Controller::class . '@index')->name('index');

Route::middleware('auth.admin')->group(function () {
    Route::get('/admin', function () {
        return view('admin_welcome');
    });
});


Route::middleware('auth.member')->group(function () {
    Route::get('/shortLink', ShortLinkController::class . '@index')->name('shortLink.index');
    Route::post('/shortLink', ShortLinkController::class . '@store')->name('shortLink.store');
    
});
