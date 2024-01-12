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
use App\HTTP\Controllers\UsuarioController;









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


Auth::routes();




//ANGELA 107
//PERSONAL
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Rutas para administradores
    //EMPLEADOS O PERSONAL
    Route::get('/personal/listado', [PersonalController::class, 'index'])->name('listado_personal');
    Route::get('/personal/editar/{id}', [PersonalController::class, 'form_edicion'])->name('editar_empleado');
    Route::post('/personal/editar/{id}', [PersonalController::class, 'editar'])->name('actualizar_empleado');
    Route::get('/personal/crear_registro', [PersonalController::class, 'form_registro_personal'])->name('crear_personal');  
    Route::post('/personal/registrar', [PersonalController::class, 'registrar'])->name('form_registrar_personal');
    
    //HOME
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //USUARIOS
    Route::get('/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('lista_usuarios');
    Route::get('/usuarios/editar/{id}', [UsuarioController::class, 'form_edicion'])->name('editar_usuario');
    Route::post('/usuarios/editar/{id}', [UsuarioController::class, 'editar'])->name('editar');
    Route::get('/usuarios/eliminar/{id}', [UsuarioController::class, 'eliminar'])->name('eliminar_usuario');

    //CUENTAS
    Route::match(['get', 'post'], '/cuentas/informe',[CuentasController::class, 'informe'])->name('informe_cuentas');
    Route::match(['get', 'post'],'/ingresos/pdf', [CuentasController::class, 'generarPDF'])->name('ingresos.pdf');
    
    
    Route::get('/citas/editar/{id}', [CitasAdminController::class, 'form_editar_cita'])->name('citas_editar');
    Route::post('/citas/actualizar/{id}', [CitasAdminController::class, 'actualizar_cita'])->name('citas_actualizar');
    Route::get('/citas/eliminar/{id}', [CitasAdminController::class, 'eliminar_cita'])->name('citas_eliminar');
    //DANIEL 70
    //Rutas citas administrador
    Route::get('/citas/listar', [CitasAdminController::class, 'index'])->name('listaCitas');
    Route::get('/citas/crear_registro', [CitasAdminController::class, 'form_registro_cita'])->name('crear_cita');
    Route::post('/citas/crear_cita', [CitasAdminController::class, 'registrar_cita'])->name('form_registrar_cita');
    
    //Ruta cuentass
    Route::get('/cuentas/listar', [CuentasController::class, 'index'])->name('listaCuentas');
    Route::get('/cuentas/crear_registro', [CuentasController::class, 'form_registro_ingreso'])->name('crear_ingreso');
    Route::post('/cuentas/registrar', [CuentasController::class, 'registrar_ingreso'])->name('form_registrar_cuentas');
    Route::get('/cuentas/editar/{id}', [CuentasController::class, 'form_editar_ingreso'])->name('cuentas_editar');
    Route::post('/cuentas/actualizar/{id}', [CuentasController::class, 'actualizar_ingreso'])->name('cuentas_actualizar');
    Route::get('/cuentas/eliminar/{id}', [CuentasController::class, 'eliminar_ingreso'])->name('cuentas_eliminar');
    Route::post('/cuentas/eliminar/{id}', [CuentasController::class, 'eliminar_ingreso'])->name('form_registrar_cuentas');
    
    
    //VICTOR 88
    Route::get('/servicios/listar', [ServiciosController::class, 'index'])->name('servicios');
    Route::match(['get', 'post'], '/servicios/crear', [ServiciosController::class, 'form_registrar'])->name('form_registrar_servicio');
    Route::post('/servicios/editar/{id_procedimiento}', [ServiciosController::class, 'modal_editar'])->name('form_editar_servicio');
    Route::get('/contabilidad', [EgresosController::class, 'index'])->name('contabilidad');
    Route::get('/egresos/listar', [EgresosController::class, 'list'])->name('listar_egresos');
    Route::match(['get', 'post'], '/egresos/crear', [EgresosController::class, 'form_registrar'])->name('form_registrar_egreso');
    Route::match(['get', 'post'], '/egresos/informe',[EgresosController::class, 'informe'])->name('informe_egresos');
    Route::match(['get', 'post'],'/egresos/pdf', [EgresosController::class, 'generarPDF'])->name('egreso.pdf');
    Route::post('/egresos/editar/{id_egreso}', [EgresosController::class, 'modal_editar'])->name('form_editar_egreso');


});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/servicios/citas', [CitasController::class, 'citas'])->name('bonita_citas');
    Route::post('/citas/registrar', [CitasController::class, 'form_reg_cita'])->name('bonita_citas_registrar');
    Route::post('/citas/validar_disponibilidad', [CitasController::class, 'validarDisponibilidad'])->name('bonita_citas_disponibilidad');
});



//VISTAS PUBLICAS

Route::get('/', [PresentacionServiciosController::class, 'index'])->name('bonita_inicio');
Route::get('/servicios/damas', [PresentacionServiciosController::class, 'damas'])->name('bonita_damas');
Route::get('/servicios/caballeros', [PresentacionServiciosController::class, 'caballeros'])->name('bonita_caballeros');
Route::get('/servicios/maquillaje', [PresentacionServiciosController::class, 'maquillaje'])->name('bonita_maquillaje');


Route::get('/servicios/registro', [PresentacionServiciosController::class, 'RegistroCliente'])->name('bonita_registrarme');
Route::post('/servicios/registrar', [PresentacionServiciosController::class, 'registrar'])->name('form_registrar');















