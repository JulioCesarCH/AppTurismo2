<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CapacitacionController;
use App\Http\Controllers\GastronomiaController;
use App\Http\Controllers\AtractivoturisticoController;
use App\Http\Controllers\FechafestivaController;
use App\Http\Controllers\ServicioturisticoController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/capacitacion', [App\Http\Controllers\CapacitacionController::class, 'index'])->middleware("auth");
Route::get('/gastronomia', [App\Http\Controllers\GastronomiaController::class, 'index']);
Route::get('/fechafestiva', [App\Http\Controllers\FechafestivaController::class, 'index']);
Route::get('/atractivoturistico', [App\Http\Controllers\AtractivoturisticoController::class, 'index']);
Route::get('/atractivoturisticop', [App\Http\Controllers\AtractivoturisticoController::class, 'indexp']);
Route::get('/alojamiento', [App\Http\Controllers\ServicioturisticoController::class, 'alojamiento']);
Route::get('/restaurante', [App\Http\Controllers\ServicioturisticoController::class, 'restaurante']);
Route::get('/transporte', [App\Http\Controllers\ServicioturisticoController::class, 'transporte']);
Route::get('/clinicas', [App\Http\Controllers\ServicioturisticoController::class, 'clinicas']);
Route::post('/atractivoturisticop/guardar',[AtractivoturisticoController::class,'guardar']);
