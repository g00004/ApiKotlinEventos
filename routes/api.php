<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\RSVPController;
use App\Http\Controllers\ComentarioCalificacionController;
use App\Http\Controllers\HistorialEventoController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::post('/usuarios', [UsuarioController::class, 'store']);
Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);
Route::put('/usuarios/{id}', [UsuarioController::class, 'update']);
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy']);

// Eventos
Route::get('/eventos', [EventoController::class, 'index']);
Route::post('/eventos', [EventoController::class, 'store']);
Route::get('/eventos/{id}', [EventoController::class, 'show']);
Route::put('/eventos/{id}', [EventoController::class, 'update']);
Route::delete('/eventos/{id}', [EventoController::class, 'destroy']);

// RSVP
Route::get('/rsvp', [RSVPController::class, 'index']);
Route::post('/rsvp', [RSVPController::class, 'store']);
Route::get('/rsvp/{id}', [RSVPController::class, 'show']);
Route::put('/rsvp/{id}', [RSVPController::class, 'update']);
Route::delete('/rsvp/{id}', [RSVPController::class, 'destroy']);

// Comentarios y Calificaciones
Route::get('/comentarios', [ComentarioCalificacionController::class, 'index']);
Route::post('/comentarios', [ComentarioCalificacionController::class, 'store']);
Route::get('/comentarios/{id}', [ComentarioCalificacionController::class, 'show']);
Route::delete('/comentarios/{id}', [ComentarioCalificacionController::class, 'destroy']);

// Historial de Eventos
Route::get('/historial', [HistorialEventoController::class, 'index']);
Route::post('/historial', [HistorialEventoController::class, 'store']);
Route::get('/historial/{id}', [HistorialEventoController::class, 'show']);
Route::delete('/historial/{id}', [HistorialEventoController::class, 'destroy']);