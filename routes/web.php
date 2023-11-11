<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;
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

























































//PERSONAL
Route::get('/personal/listado', [PersonalController::class, 'index'])
->middleware(['auth', 'verified'])->name('listado_personal');

Route::get('/personal/crear_registro', [PersonalController::class, 'form_registro_personal'])
->middleware(['auth', 'verified'])->name('crear_personal');

Route::post('/personal/registrar', [PersonalController::class, 'registrar'])
->middleware(['auth', 'verified'])->name('form_registrar_personal');
