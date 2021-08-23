<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\CorreosController;
use Illuminate\Support\Facades\Auth;

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
 
//Flyers
Route::get('/viajes', [ViajeController::class, 'index'])->name('viaje.index');
Route::get('/home', [ViajeController::class, 'home'])->name('viaje.home'); //desde vista cliente
Route::get('/viajes/crear', [ViajeController::class, 'create'])->name('viaje.create');
Route::get('/viajes/{viaje}/editar', [ViajeController::class, 'edit'])->name('viaje.edit');
Route::delete('/viajes/{viaje}', [ViajeController::class, 'destroy'])->name('viaje.destroy');
Route::get('/viajes/{viaje}', [ViajeController::class, 'show'])->name('viaje.show');
Route::patch('/viajes/{viaje}', [ViajeController::class, 'update'])->name('viaje.update');
Route::post('/viajes', [ViajeController::class, 'store'])->name('viaje.store');

//Paises
Route::get('/paises', [CountryController::class, 'index'])->name('country.index');
Route::get('/paises/crear', [CountryController::class, 'create'])->name('country.create');
Route::post('/paises', [CountryController::class, 'store'])->name('country.store');
Route::get('/paises/{country}', [CountryController::class, 'show'])->name('country.show');
Route::get('/paises/{country}/editar', [CountryController::class, 'edit'])->name('country.edit');
Route::patch('/paises/{country}', [CountryController::class, 'update'])->name('country.update');
Route::delete('/paises/{country}', [CountryController::class, 'destroy'])->name('country.destroy');


//Paquetes
Route::get('/paquetes', [PackageController::class, 'index'])->name('package.index');
Route::get('/viajesPack', [PackageController::class, 'home'])->name('package.home'); //desde vista cliente
Route::get('/paquetes/crear', [PackageController::class, 'create'])->name('package.create');
Route::get('/paquetes/crear', [PackageController::class, 'mostrarTodo'])->name('package.create');
Route::post('/paquetes', [PackageController::class, 'store'])->name('package.store');
Route::get('/paquetes/{package}', [PackageController::class, 'show'])->name('package.show');
Route::get('/paquetes/{package}/editar', [PackageController::class, 'edit'])->name('package.edit');
Route::patch('/paquetes/{package}', [PackageController::class, 'update'])->name('package.update');
Route::delete('/paquetes/{package}', [PackageController::class, 'destroy'])->name('package.destroy');

//Correos
Route::post('/contacto', [CorreosController::class, 'contact'])->name('viaje.contact');
Route::post('/home', [CorreosController::class, 'reserva'])->name('viaje.reserva');
Route::post('/reclamo', [CorreosController::class, 'reclamo'])->name('viaje.reclamo');
Route::post('/viajesPack', [CorreosController::class, 'reservaPaquete'])->name('package.reservas');

//login routes
Auth::routes();

