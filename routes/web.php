<?php

use App\Http\Controllers\TareasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('tareas')->group(function () {
    Route::get('/getTodos', [TareasController::class, 'get']);
    Route::post('/', [TareasController::class, 'store']);
    Route::get('/{id}', [TareasController::class, 'show']);
    Route::put('/{id}', [TareasController::class, 'update']);
    Route::delete('/{id}', [TareasController::class, 'delete']);
    Route::put('/state/{id}', [TareasController::class, 'state']);
});

