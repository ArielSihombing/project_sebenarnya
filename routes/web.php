<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// view
Route::get('music', function () {
    return view('music');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('/', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('testimoni', function () {
    return view('testimoni');
});
Route::get('/admin', 'App\Http\Controllers\MahasiswaController@admin');

// crud contact
Route::get('/contact', 'App\Http\Controllers\ContactController@index');
Route::get('/contact/tambah', 'App\Http\Controllers\ContactController@tambah');
Route::post('/contact/store', 'App\Http\Controllers\ContactController@store');

// login-register
Route::get('home', function () {
    return view('home', ['title' => 'Home']);
})->name('home');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
