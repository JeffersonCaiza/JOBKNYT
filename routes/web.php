<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('registro', [App\Http\Controllers\HomeController::class, 'index'])->name('registro')->middleware('auth');
Route::post('registro', [App\Http\Controllers\RegisterController::class, 'create'])->name('registro')->middleware('auth');

Route::get('roles', [App\Http\Controllers\ControllerRol::class, 'index'])->name('roles')->middleware('auth');

Route::get('perfil', [App\Http\Controllers\HomeController::class, 'index'])->name('perfil')->middleware('auth');

Route::get('pagos', [App\Http\Controllers\HomeController::class, 'index'])->name('pagos')->middleware('auth');
Route::post('pagos', [App\Http\Controllers\PagoController::class, 'store'])->name('pagos')->middleware('auth');

Route::get('detalle_pagos', [App\Http\Controllers\DetallePagoController::class, 'index'])->name('detalle_pagos')->middleware('auth');
Route::get('detalle_pagos/{CODBANCO}', [App\Http\Controllers\PagoController::class, 'show'])->name('detalle_pagos')->middleware('auth');
Route::post('detalle_pagos', [App\Http\Controllers\DetallePagoController::class, 'store'])->name('detalle_pagos')->middleware('auth');

Route::get('catalogo_pagos', [App\Http\Controllers\ControllerCatalogoPagos::class, 'index'])->name('pagos')->middleware('auth');

Route::get('estudiantes', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('lista_estudiantes', [App\Http\Controllers\ControllerEstudiante::class, 'index'])->name('estudiantes')->middleware('auth');
Route::get('estudiantes/{estudiante}', [App\Http\Controllers\ControllerEstudiante::class, 'show'])->name('estudiantes')->middleware('auth');
Route::delete('estudiantes', [App\Http\Controllers\ControllerEstudiante::class, 'destroy'])->name('estudiantes')->middleware('auth');
Route::post('estudiantes', [App\Http\Controllers\ControllerEstudiante::class, 'store'])->name('estudiantes')->middleware('auth');
Route::put('estudiantes/{id}', [App\Http\Controllers\ControllerEstudiante::class, 'update'])->name('estudiantes')->middleware('auth');

Route::get('ofertas', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('ofertas_laborales', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('/lista_noveles', [App\Http\Controllers\ControllerUsuario::class, 'index'])->name('noveles')->middleware('auth');
Route::get('usuarios', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('administrador', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('registro_empresa', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('perfil_empresa', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('lista_ofertas', [App\Http\Controllers\ControllerOferta::class, 'index'])->name('ofertas')->middleware('auth');
Route::post('ofertas', [App\Http\Controllers\ControllerOferta::class, 'store'])->name('ofertas')->middleware('auth');
Route::put('ofertas/{id}', [App\Http\Controllers\ControllerOferta::class, 'update'])->name('ofertas')->middleware('auth');
Route::delete('ofertas/{id}', [App\Http\Controllers\ControllerOferta::class, 'destroy'])->name('ofertas')->middleware('auth');
Route::delete('usuarios/{id}', [App\Http\Controllers\ControllerUsuario::class, 'destroy'])->name('usuarios')->middleware('auth');



