<?php

use App\Http\Controllers\PacientesController;
use App\Http\Controllers\ProcedimientosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProcedimientoController;
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
Route::get('/', function (){
    return view('prueba');
});



Route::get('/pacientes', [PacientesController::class, 'index']);
 Route::get('/pacientes/crear', [PacientesController::class, 'create']);
 Route::post('/pacientes/crear', [PacientesController::class, 'store']);
 route::get('/pacientes/editar/{id}' , [PacientesController::class, 'edit']);
 route::post('/pacientes/actualizar/{id}',  [PacientesController::class, 'update']);
 route::delete('/pacientes/eliminar/{pacientes}', [PacientesController::class, 'destroy']);
 
 Route::get('/procedimientos', [ProcedimientoController::class, 'index']);
 Route::get('/procedimientos/crear', [ProcedimientoController::class, 'create']);
 Route::post('/procedimientos/crear', [ProcedimientoController::class, 'store']);
 route::get('/procedimientos/editar/{id}' , [ProcedimientoController::class, 'edit']);
 route::post('/procedimientos/actualizar/{id}',  [ProcedimientoController::class, 'update']);
 route::delete('/procedimientos/eliminar/{procedimientos}', [ProcedimientoController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
