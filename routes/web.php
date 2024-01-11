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
use App\HTTP\Controllers\PresentacionServiciosController;
use App\HTTP\Controllers\CitasController;









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

// Route::get('/', function () {
//     return view('auth.login');
// });
Auth::routes();

Route::get('/citas/editar/{id}', [CitasAdminController::class, 'form_editar_cita'])->name('citas_editar');
Route::post('/citas/actualizar/{id}', [CitasAdminController::class, 'actualizar_cita'])->name('citas_actualizar');
Route::get('/citas/eliminar/{id}', [CitasAdminController::class, 'eliminar_cita'])->name('citas_eliminar');
//DANIEL 70
//Rutas citas administrador
Route::get('/citas/listar', [CitasAdminController::class, 'index'])
->middleware(['auth', 'verified'])->name('listaCitas');
Route::get('/citas/crear_registro', [CitasAdminController::class, 'form_registro_cita'])
->middleware(['auth', 'verified'])->name('crear_cita');
Route::post('/citas/crear_cita', [CitasAdminController::class, 'registrar_cita'])
->middleware(['auth', 'verified'])->name('form_registrar_cita');

//Ruta cuentass
Route::get('/cuentas/listar', [CuentasController::class, 'index'])
->middleware(['auth', 'verified'])->name('listaCuentas');
Route::get('/cuentas/crear_registro', [CuentasController::class, 'form_registro_ingreso'])
->middleware(['auth', 'verified'])->name('crear_ingreso');
Route::post('/cuentas/registrar', [CuentasController::class, 'registrar_ingreso'])
->middleware(['auth', 'verified'])->name('form_registrar_cuentas');
Route::post('/cuentas/eliminar/{id}', [CuentasController::class, 'eliminar_ingreso'])
->middleware(['auth', 'verified'])->name('form_registrar_cuentas');
Route::get('/cuentas/editar/{id}', [CuentasController::class, 'form_editar_ingreso'])->name('cuentas_editar');
Route::post('/cuentas/actualizar/{id}', [CuentasController::class, 'actualizar_ingreso'])->name('cuentas_actualizar');
Route::get('/cuentas/eliminar/{id}', [CuentasController::class, 'eliminar_ingreso'])->name('cuentas_eliminar');
//VICTOR 88
Route::get('/servicios/listar', [ServiciosController::class, 'index'])
->middleware(['auth', 'verified'])->name('servicios');
Route::match(['get', 'post'], '/servicios/crear', [ServiciosController::class, 'form_registrar'])
->middleware(['auth', 'verified'])->name('form_registrar_servicio');
Route::post('/servicios/editar/{id_procedimiento}', [ServiciosController::class, 'modal_editar'])
->middleware(['auth', 'verified'])->name('form_editar_servicio');
Route::get('/contabilidad', [EgresosController::class, 'index'])
->middleware(['auth', 'verified'])->name('contabilidad');
Route::get('/egresos/listar', [EgresosController::class, 'list'])
->middleware(['auth', 'verified'])->name('listar_egresos');
Route::match(['get', 'post'], '/egresos/crear', [EgresosController::class, 'form_registrar'])
->middleware(['auth', 'verified'])->name('form_registrar_egreso');
Route::match(['get', 'post'], '/egresos/informe',[EgresosController::class, 'informe'])
->middleware(['auth', 'verified'])->name('informe_egresos');
Route::match(['get', 'post'],'/egresos/pdf', [EgresosController::class, 'generarPDF'])
->middleware(['auth', 'verified'])->name('egreso.pdf');
Route::post('/egresos/editar/{id_egreso}', [EgresosController::class, 'modal_editar'])
->middleware(['auth', 'verified'])->name('form_editar_egreso');



//ANGELA 107
//PERSONAL
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Rutas para administradores
    Route::get('/personal/listado', [PersonalController::class, 'index'])->name('listado_personal');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/servicios/citas', [CitasController::class, 'citas'])->name('bonita_citas');
    Route::post('/citas/registrar', [CitasController::class, 'form_reg_cita'])->name('bonita_citas_registrar');
    Route::post('/citas/validar_disponibilidad', [CitasController::class, 'validarDisponibilidad'])->name('bonita_citas_disponibilidad');
});


// Route::get('/personal/listado', [PersonalController::class, 'index'])
// ->middleware(['auth', 'verified'])->name('listado_personal');
Route::get('/personal/crear_registro', [PersonalController::class, 'form_registro_personal'])
->middleware(['auth', 'verified'])->name('crear_personal');

Route::post('/personal/registrar', [PersonalController::class, 'registrar'])
->middleware(['auth', 'verified'])->name('form_registrar_personal');

Route::get('/', [PresentacionServiciosController::class, 'index'])->name('bonita_inicio');
Route::get('/servicios/damas', [PresentacionServiciosController::class, 'damas'])->name('bonita_damas');
Route::get('/servicios/caballeros', [PresentacionServiciosController::class, 'caballeros'])->name('bonita_caballeros');
Route::get('/servicios/maquillaje', [PresentacionServiciosController::class, 'maquillaje'])->name('bonita_maquillaje');



Route::get('/servicios/registro', [PresentacionServiciosController::class, 'RegistroCliente'])->name('bonita_registrarme');
Route::post('/servicios/registrar', [PresentacionServiciosController::class, 'registrar'])->name('form_registrar');


















