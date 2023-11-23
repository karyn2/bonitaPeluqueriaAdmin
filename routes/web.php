<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//Rutas controladores
use App\Http\Controllers\CitasAdminController;
use App\Http\Controllers\PersonalController;
use App\HTTP\Controllers\ServiciosController;

//DANIEL 11










//VICTOR 22













//ANGELA 36
use App\HTTP\Controllers\PresentacionServiciosController;










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


//DANIEL 70
//Rutas citas administrador
Route::get('/citas/listar', [CitasAdminController::class, 'index'])
->middleware(['auth', 'verified'])->name('listaCitas');















//VICTOR 88
Route::get('/servicios/listar', [ServiciosController::class, 'index'])
->middleware(['auth', 'verified'])->name('servicios');
















//ANGELA 107
//PERSONAL
Route::get('/personal/listado', [PersonalController::class, 'index'])
->middleware(['auth', 'verified'])->name('listado_personal');

Route::get('/personal/crear_registro', [PersonalController::class, 'form_registro_personal'])
->middleware(['auth', 'verified'])->name('crear_personal');

Route::post('/personal/registrar', [PersonalController::class, 'registrar'])
->middleware(['auth', 'verified'])->name('form_registrar_personal');

Route::get('/inicio', [PresentacionServiciosController::class, 'index'])->name('bonita_inicio');
Route::get('/servicios/damas', [PresentacionServiciosController::class, 'damas'])->name('bonita_damas');


























