<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.app.dashboard-simpadu', ['type_menu' => '']);
});

Route::get('/', function () {
    //return view('welcome');
    return view('pages.blank-page', ['type_menu' => '']);
});

Route::get('/', function () {
    //untuk halaman login
    return view('pages.auth.auth-login');
})->name('login');

Route::get('/register', function () {
    //untuk halaman register
    return view('pages.auth.auth-register');
})->name('register'); 

Route::get('/forgot', function () {
    //lupa password
    return view('pages.auth.auth-forgot-password');
})->name('forgot'); 

Route::get('/reset', function () {
    //lupa password
    return view('pages.auth.auth-reset-password');
})->name('reset'); 


