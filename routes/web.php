<?php

use App\Http\Controllers\AuthController;
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


Route::middleware('auth.admin')->group(function () {
    Route::get('/admin', function () {
        return view('admin_welcome');
    });
});


Route::middleware('auth.member')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
