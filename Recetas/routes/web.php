<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return redirect('/login');

 });

//mostrar el formulario de login
Route::get('/login', [Login::class, 'index'])->name('login');

//ruta enviar el formulario
Route::post('/login', [Login::class, 'login']);

//cerrar sesion
Route::post('/logout', [Login::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');;

// Ruta para mostrar el formulario de registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Ruta para procesar el formulario de registro (POST)
Route::post('/register', [RegisterController::class, 'register']);