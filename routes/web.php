<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//Rutas controladores
use App\Http\Controllers\CitasAdminController;
use App\Http\Controllers\PersonalController;
use App\HTTP\Controllers\ServiciosController;

//DANIEL 11



use App\Http\Controllers\CuentasController;






//VICTOR 22
use App\Http\Controllers\EgresosController;












//ANGELA 36











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
//Ruta cuentas
Route::get('/cuentas/listar', [CuentasController::class, 'index'])
->middleware(['auth', 'verified'])->name('listaCuentas');

Route::get('/cuentas/crear_registro', [CuentasController::class, 'form_registro_ingreso'])
->middleware(['auth', 'verified'])->name('crear_ingreso');

Route::post('/cuentas/registrar', [CuentasController::class, 'registrar_ingreso'])
->middleware(['auth', 'verified'])->name('form_registrar_cuentas');





//VICTOR 88
Route::get('/servicios/listar', [ServiciosController::class, 'index'])
->middleware(['auth', 'verified'])->name('servicios');
Route::match(['get', 'post'], '/servicios/crear', [ServiciosController::class, 'form_registrar'])
->middleware(['auth', 'verified'])->name('form_registrar_servicio');
//Egresos
Route::get('/egresos', [EgresosController::class, 'index'])
->middleware(['auth', 'verified'])->name('egresos');
Route::get('/egresos/listar', [EgresosController::class, 'list'])
->middleware(['auth', 'verified'])->name('listar_egresos');
Route::match(['get', 'post'], '/egresos/crear', [EgresosController::class, 'form_registrar'])
->middleware(['auth', 'verified'])->name('form_registrar_egreso');











//ANGELA 107
//PERSONAL
Route::get('/personal/listado', [PersonalController::class, 'index'])
->middleware(['auth', 'verified'])->name('listado_personal');

Route::get('/personal/crear_registro', [PersonalController::class, 'form_registro_personal'])
->middleware(['auth', 'verified'])->name('crear_personal');

Route::post('/personal/registrar', [PersonalController::class, 'registrar'])
->middleware(['auth', 'verified'])->name('form_registrar_personal');



























