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
Route::get('index', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('testimoni', function () {
    return view('testimoni');
});


// crud contact
Route::get('/about', 'App\Http\Controllers\ContactController@index');
Route::get('/contact/tambah', 'App\Http\Controllers\ContactController@tambah');
Route::post('/contact/store', 'App\Http\Controllers\ContactController@store');

// login-register
Route::get('HOME', function () {
    return view('home', ['title' => 'Home']);
})->name('home');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

// tambah
Route::get('/video/{video_music}', 'VideoController@showVideo')->name('video.show');
Route::get('/admin/tambah', 'App\Http\Controllers\VideoController@tambah');
Route::get('/admin', 'App\Http\Controllers\VideoController@indexx');
Route::post('/admin/store', 'App\Http\Controllers\VideoController@store')->name('video.store');
Route::get('/save-to-folder', 'App\Http\Controllers\VideoController@saveToFolder')->name('video.saveToFolder');

//video
Route::get('/', [App\Http\Controllers\VideoController::class, 'index']);
Route::delete('/file', [App\Http\Controllers\VideoController::class, 'delete'])->name('delete.file');
Route::put('/update/{file_id}', [App\Http\Controllers\VideoController::class, 'update'])->name('update.file');
Route::get('/edit/{file_id}', [App\Http\Controllers\VideoController::class, 'edit'])->name('edit.file');
Route::delete('/delete/{file_id}', [App\Http\Controllers\VideoController::class, 'delete'])->name('delete.file');
Route::post('/insert_video', [App\Http\Controllers\VideoController::class, 'insert'])->name('insert.file');
