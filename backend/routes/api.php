<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\tareaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
/* pruebatech */

Route::get('/tareas', [tareaController::class, 'index']);

Route::get('/tareas/{id}', [tareaController::class, 'show']);

Route::post('/tareas',[tareaController::class, 'store']);

Route::put('/tareas/{id}', [tareaController::class, 'update']);

Route::delete('/tareas/{id}',[tareaController::class, 'destroy']);