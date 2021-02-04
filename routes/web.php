<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\BDController;

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

//* Vista Jugadores
Route::get('/Jugadores', [ViewsController::class, 'viewJugadores'])->name('VistaJugadores');

//* Vista jugador
Route::get('/Jugador/{id}', [ViewsController::class, 'viewJugadoresInf'])->name('VerJugador');

    //* Eliminar Jugador
    Route::get('/EliminarJugador/{id}', [BDController::class, 'eliminarJugador'])->name('EliminarJugador');

//* Vista Editar
Route::get('/EditarUsuario/{id}', [ViewsController::class, 'viewEditarJugador'])->name('EditarJugador');

    //* Vista Editar
    Route::post('/Editar', [BDController::class, 'modificarJugador'])->name('ModificarJugador');

//* Vista Añadir
Route::get('/Añadir', [ViewsController::class, 'viewAñadirJugadores'])->name('VistaAñadirJugador');

    //* Añadir Jugador
    Route::post('/AñadirJugador', [BDController::class, 'añadirJugador'])->name('AñadirJugador');

    //* Añadir Tecnica
    Route::post('/AñadirTecnica', [BDController::class, 'añadirTecnica'])->name('AñadirTecnica');

// Usamos las vistas Login & Register que ya nos dan al hacer los comandos
Route::get('/Login', function () {
    return view('auth.login');
});
Route::get('/Register', function () {
    return view('auth.register');
});

Auth::routes();

Route::get('/CerrarSesion', [LoginController::class, 'cerrarSesion'])->name('CerrarSesion');