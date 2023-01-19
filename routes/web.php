<?php

use App\Http\Controllers\AdminController;
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

Route::get('/home', ShortLinkController::class.'@home')->name('home');

Route::middleware('auth.admin')->group(function () {
    Route::get('/admin', AdminController::class . '@index')->name('admin.index');
    Route::get('/delete/{id}', AdminController::class . '@deleteUser')->name('user.delete');
    Route::get('/restore/{id}', AdminController::class . '@restoreUser')->name('user.restore');
    Route::post('/user/{id}', AdminController::class . '@editUser')->name('user.edit');
    Route::get('/logout', AuthController::class . '@logout');
    // Route::post('/notify/{id}', AdminController::class . '@notifyUser')->name('user.notify');
});


Route::middleware('auth.member')->group(function () {
    Route::get('/shortLink/search', ShortLinkController::class.'@search');
    Route::get('/shortLink', ShortLinkController::class . '@index')->name('shortLink.index');
    Route::post('/shortLink', ShortLinkController::class . '@store')->name('shortLink.store');
    Route::get('/logout', AuthController::class . '@logout');
});
Route::middleware(['auth'])->group(function(){
    Route::get('/Profile',[AuthController::class,'ProfileDetail'])->name('Profile');
    Route::get('/UpdateProfile/{id}',[AuthController::class,'getUpdate']);
    Route::post('/UpdateProfile/{id}',[AuthController::class,'updateProfile']);
});