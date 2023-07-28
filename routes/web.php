<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\EventoControlador;
use App\Http\Controllers\PuntosController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Pagina Principal de laravel
Route::get('/', function () {
    return view('welcome');
});


// Sistema de rutas para LARAVEL
// End point login
Route::post('/api/login', [UserController::class, 'login']);

// Rutas portegidas
Route::group(['middleware' => ['api.auth']], function () {

    // /*************RUTAS PROTEGIDAS PARA USUARIOS********/ 
    Route::resource('/api/user', UserController::class);
    Route::post('/api/user/buscarusuarios', [UserController::class, 'buscarUsuarios']);

    // /*************RUTAS PROTEGIDAS PARA EVENTOS********/ 
    Route::resource('/api/eventos', EventoControlador::class);

    // /*************RUTAS PROTEGIDAS PARA PUNTOS********/ 
    Route::resource('/api/puntos', PuntosController::class);
    Route::get('/api/puntos/indexpuntoseventos/{id}', [PuntosController::class, 'indexPuntosEventos']);

    // /*************RUTAS PROTEGIDAS PARA AGENDAS********/ 
    Route::resource('/api/agendas', AgendaController::class);
    Route::post('/api/agendas/destroyagenda', [AgendaController::class, 'destroyAgenda']);
});
