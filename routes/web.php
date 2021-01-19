<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\CorreosController;

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


//Route::view('/', 'travel')->name('travel');
Route::get('home', function () {
    return view('home')->name('home');
});
Route::get('/', function () {
    return view('travel');
});
//Route::view('nosotros', function () {    return view('nosotros');});
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/contacto', 'contacto')->name('contacto');
Route::view('/viajes', 'viajes')->name('viajes');
Route::view('/travel', 'travel')->name('travel');
Route::view('/reclamo', 'reclamo')->name('reclamo');

//Mostrar

Route::get('/viajes', [ViajeController::class, 'index'])->name('viaje.index');
Route::get('/home', [ViajeController::class, 'home'])->name('viaje.home');
//crear
Route::get('/viajes/crear', [ViajeController::class, 'create'])->name('viaje.create');
//editar
Route::get('/viajes/{viaje}/editar', [ViajeController::class, 'edit'])->name('viaje.edit');
//actualizar
Route::patch('/viajes/{viaje}', [ViajeController::class, 'update'])->name('viaje.update');
//Eliminar
Route::delete('/viajes/{viaje}', [ViajeController::class, 'destroy'])->name('viaje.destroy');
//Detalle
Route::get('/viajes/{viaje}', [ViajeController::class, 'show'])->name('viaje.show');

////
Route::post('/viajes', [ViajeController::class, 'store'])->name('viaje.store');

//Correos
Route::post('/contacto', [CorreosController::class, 'contact'])->name('viaje.contact');
Route::post('/home', [CorreosController::class, 'reserva'])->name('viaje.reserva');
Route::post('/reclamo', [CorreosController::class, 'reclamo'])->name('viaje.reclamo');

//login routes
Auth::routes();

