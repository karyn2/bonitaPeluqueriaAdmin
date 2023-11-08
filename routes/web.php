<?php

use Illuminate\Support\Facades\Route;

//Rutas controladores
use App\Http\Controllers\CitasAdminController;

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
    return view('auth.login');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas citas administrador

Route::get('/citas', [CitasAdminController::class, 'index'])->name('listaCitas');



