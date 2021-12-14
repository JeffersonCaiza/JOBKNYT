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

Route::get('registro_empresa', [App\Http\Controllers\HomeController::class, 'index'])->name('registro');
Route::post('registro_empresa', [App\Http\Controllers\RegisterEmpresaController::class, 'create'])->name('registro');

Route::get('Postulacion', [App\Http\Controllers\HomeController::class, 'index'])->name('registro');

Route::get('roles', [App\Http\Controllers\ControllerRol::class, 'index'])->name('roles');

Route::get('lista', [App\Http\Controllers\ControllerUsuario::class, 'show'])->name('usuarios');

Route::get('perfil', [App\Http\Controllers\HomeController::class, 'index'])->name('perfil')->middleware('auth');


Route::get('ofertasos', [App\Http\Controllers\ControllerOfertap::class, 'show'])->name('ofertasos')->middleware('auth');
Route::get('ofertas', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('ofertas_laborales', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');

Route::get('ofertasr', [App\Http\Controllers\ControllerOferta::class, 'index'])->middleware('auth');
Route::get('ofertasri', [App\Http\Controllers\ControllerOfertaInactiva::class, 'index'])->middleware('auth');

Route::get('postulaciones', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('lista_postulaciones', [App\Http\Controllers\ControllerPostulacion::class, 'show'])->middleware('auth');
Route::post('postulaciones', [App\Http\Controllers\ControllerPostulacion::class, 'store'])->name('postulaciones')->middleware('auth');
Route::put('postulaciones/{id}', [App\Http\Controllers\ControllerPostulacion::class, 'update'])->name('postulaciones')->middleware('auth');
Route::delete('postulaciones/{id}', [App\Http\Controllers\ControllerPostulacion::class, 'destroy'])->name('postulaciones')->middleware('auth');


Route::get('lista_postulacionese', [App\Http\Controllers\ControllerPostulacionP::class, 'show'])->middleware('auth');
Route::get('Postulaciones_Empresa', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');



Route::get('/lista_noveles', [App\Http\Controllers\ControllerUsuario::class, 'index'])->name('noveles')->middleware('auth');

Route::get('/lista_noveleses', [App\Http\Controllers\ControllerUsuario::class, 'show'])->name('noveles')->middleware('auth');



Route::get('usuarios', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('administrador', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('registro_empresa', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('perfil_empresa', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('lista_ofertas', [App\Http\Controllers\ControllerOfertap::class, 'index'])->name('ofertas')->middleware('auth');

Route::get('lista_ofertaso', [App\Http\Controllers\ControllerOfertap::class, 'show'])->name('ofertas')->middleware('auth');


Route::post('ofertas', [App\Http\Controllers\ControllerOferta::class, 'store'])->name('ofertas')->middleware('auth');
Route::put('ofertas/{id}', [App\Http\Controllers\ControllerOferta::class, 'update'])->name('ofertas')->middleware('auth');
Route::delete('ofertas/{id}', [App\Http\Controllers\ControllerOferta::class, 'destroy'])->name('ofertas')->middleware('auth');
Route::delete('usuarios/{id}', [App\Http\Controllers\ControllerUsuario::class, 'destroy'])->name('usuarios')->middleware('auth');


Route::get('lista_ofertasd', [App\Http\Controllers\ControllerOfertad::class, 'index'])->name('ofertas')->middleware('auth');


Route::get('hoja', [App\Http\Controllers\ControllerHoja::class, 'index'])->middleware('auth');
Route::post('hojavida', [App\Http\Controllers\ControllerHoja::class, 'store'])->name('hoja')->middleware('auth');
Route::put('hoja/{id}', [App\Http\Controllers\ControllerHoja::class, 'update'])->name('hoja')->middleware('auth');
Route::get('Crear_Hoja', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('Hoja_de_vida', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('hojas', [App\Http\Controllers\ControllerHoja::class, 'show'])->name('hoja')->middleware('auth');


Route::get('Ofertas_Inactivas', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('Ofertas_Activas', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');

Route::get('lista_postulacioneses', [App\Http\Controllers\ControllerEmpreIna::class, 'show'])->middleware('auth');

Route::get('Postulaciones_Empresa_Activas', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('Postulaciones_Empresa_Inactivas', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');

Route::get('Postulaciones_Activas', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('Postulaciones_Inactivas', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');

Route::get('lista_postulacionesi', [App\Http\Controllers\ControllerPostulacionA::class, 'show'])->middleware('auth');

//Route::get('hojas', [App\Http\Controllers\ControllerHojas::class, 'show'])->name('hoja')->middleware('auth');