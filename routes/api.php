<?php

use App\Http\Controllers\TareaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return ['Welcome'];
});

Route::prefix('homework')->group(function () {
    Route::get('/', [TareaController::class, 'get']);
    Route::get('/{id}', [TareaController::class, 'show']);
    Route::post('/', [TareaController::class, 'store']);
    Route::put('/{id}', [TareaController::class, 'update']);
    Route::delete('/{id}', [TareaController::class, 'delete']);
});


