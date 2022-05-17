<?php

use App\Http\Controllers\PersonalController;
use App\Http\Controllers\VehiculosController;
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
// Home
Route::get('/', function () {
    return view('home');
})->name('home');


// Rutas de vehiculos
Route::prefix('/vehiculos')->group(function () {
    Route::get('', [VehiculosController::class, 'index'])->name('vehiculos');

    Route::get('/nuevo', [VehiculosController::class, 'create'])->name('vehiculos.nuevo');

    Route::post('/crear', [VehiculosController::class, 'store'])->name('vehiculos.crear');
});


// Rutas de Personal
Route::prefix('/personal')->group(function () {
    Route::get('', [PersonalController::class, 'index'])->name('personal');

    Route::get('/nuevo', [PersonalController::class, 'create'])->name('personal.nuevo');

    Route::post('/crear', [PersonalController::class, 'store'])->name('personal.crear');
});


// Rutas de Clientes
Route::prefix('/clientes')->group(function () {
    Route::get('', [PersonalController::class, 'index'])->name('clientes');

    Route::get('/nuevo', [PersonalController::class, 'create'])->name('clientes.nuevo');

    Route::post('/crear', [PersonalController::class, 'store'])->name('clientes.crear');
});
