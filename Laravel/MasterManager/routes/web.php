<?php
use App\Http\Controllers\ConvocatoriaController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\EntrenamientoController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\PartidoController;
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

Route::resource('equipos',EquiposController::class);
Route::resource('jugadores',JugadoresController::class);
Route::resource('entrenamientos',EntrenamientoController::class);
Route::resource('partidos',PartidoController::class);
Route::resource('asistencias',AsistenciaController::class);
Route::resource('convocatorias',ConvocatoriaController::class);