<?php
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\JugadoresController;
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


Route::resource('equipos',EquiposController::class);
Route::resource('jugadores',JugadoresController::class);