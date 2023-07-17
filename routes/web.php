<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\CapacitacionController;
use App\Http\Controllers\ContratoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'index'])->name('index');

Route::get('/register', [RegisterController::class, 'show'])->name('registro');

Route::post('/register', [RegisterController::class, 'register'])->name('registrar');

Route::get('/login', [LoginController::class, 'show'])->name('inicio');

Route::post('/login', [LoginController::class, 'login'])->name('iniciar');

Route::get('/logout', [LoginController::class,'logout'])->name('salir');

Route::get('/home', [UserController::class, 'index'])->name('home');

Route::get('/personal', [PersonalController::class, 'index'])->name('personal');
Route::get('/registrarPersonal', [PersonalController::class, 'create1'])->name('crearEmpleado');
Route::post('/registrarPersonal/paso1', [PersonalController::class, 'store1'])->name('guardarEmpleado');
Route::get('/registrarPersonal/paso2', [PersonalController::class, 'create2'])->name('personaldos');
Route::post('/registrarPersonal/paso2', [PersonalController::class, 'store2'])->name('guardardos');
Route::get('/registrarPersonal/paso3', [PersonalController::class, 'create3'])->name('personaltres');
Route::post('/registrarPersonal/paso3', [PersonalController::class, 'store3'])->name('guardartres');

Route::get('/contratos', [ContratoController::class, 'index'])->name('contratos');
Route::get('/crearContrato', [ContratoController::class, 'create'])->name('crearContrato');
Route::post('/guardarContrato', [ContratoController::class, 'store'])->name('guardarContrato');

Route::get('/capacitaciones', [CapacitacionController::class, 'index'])->name('capacitaciones');
Route::get('/crearCapacitacion', [CapacitacionController::class, 'create'])->name('crearCapacitacion');
Route::post('/guardarCapacitacion', [CapacitacionController::class, 'store'])->name('guardarCapacitacion');
//Route::get('/capacitacion/{id}', [CapacitacionController::class, 'show'])->name('capacitacion');
Route::get('/editarCapacitacion/{id}', [CapacitacionController::class, 'edit'])->name('editarCapacitacion');
Route::post('/actualizarCapacitacion', [CapacitacionController::class, 'update'])->name('actualizarCapacitacion');
Route::post('/eliminarCapacitacion/{id}', [CapacitacionController::class, 'destroy'])->name('eliminarCapacitacion');

Route::get('/inscripciones/{id}', [CapacitacionController::class, 'inscripciones'])->name('inscripciones');
Route::post('/inscribir/{id}', [CapacitacionController::class, 'inscribir'])->name('inscribir');
Route::get('/inscritos/{id}', [CapacitacionController::class, 'inscritos'])->name('inscritos');
Route::post('/puntuar/{id}', [CapacitacionController::class, 'puntuar'])->name('puntuar');

Route::get('/verPerfil', [UserController::class, 'showPerfil'])->name('perfil');
Route::get('/editarPerfil', [UserController::class, 'editPerfil'])->name('editar');
Route::post('/actualizarPerfil', [UserController::class, 'updatePerfil'])->name('actualizar');
Route::post('/eliminarPerfil/{id}', [UserController::class, 'destroyPerfil'])->name('eliminar');