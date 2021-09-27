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

Route::get('Registrar_Novel',function(){return view('auth.register');});
Route::get('Registrar_Empresa',function(){return view('auth.register');});

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('registro', [App\Http\Controllers\HomeController::class, 'index'])->name('registro');
Route::post('registro', [App\Http\Controllers\RegisterController::class, 'create'])->name('registro');

Route::get('roles', [App\Http\Controllers\ControllerRol::class, 'index'])->name('roles');

Route::get('perfil', [App\Http\Controllers\HomeController::class, 'index'])->name('perfil')->middleware('auth');



Route::get('ofertas', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('ofertas_laborales', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');

Route::get('postulaciones', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('lista_postulaciones', [App\Http\Controllers\ControllerPostulacion::class, 'index'])->middleware('auth');
Route::post('postulaciones', [App\Http\Controllers\ControllerPostulacion::class, 'store'])->name('postulaciones')->middleware('auth');
Route::put('postulaciones/{id}', [App\Http\Controllers\ControllerPostulacion::class, 'update'])->name('postulaciones')->middleware('auth');

Route::get('/lista_noveles', [App\Http\Controllers\ControllerUsuario::class, 'index'])->name('noveles')->middleware('auth');
Route::get('usuarios', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('administrador', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('registro_empresa', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('perfil_empresa', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('lista_ofertas', [App\Http\Controllers\ControllerOferta::class, 'index'])->name('ofertas')->middleware('auth');
Route::post('ofertas', [App\Http\Controllers\ControllerOferta::class, 'store'])->name('ofertas')->middleware('auth');
Route::put('ofertas/{id}', [App\Http\Controllers\ControllerOferta::class, 'update'])->name('ofertas')->middleware('auth');
Route::delete('ofertas/{id}', [App\Http\Controllers\ControllerOferta::class, 'destroy'])->name('ofertas')->middleware('auth');
Route::delete('usuarios/{id}', [App\Http\Controllers\ControllerUsuario::class, 'destroy'])->name('usuarios')->middleware('auth');



