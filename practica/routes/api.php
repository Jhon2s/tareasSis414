<?php

use App\Http\Controllers\SofaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/sofas', [SofaController::class, 'show']);
Route::post('/sofas', [SofaController::class, 'store']);
Route::delete('/sofa/{id}', [SofaController::class, 'delete']);
Route::put('/sofa/{id}', [SofaController::class, 'edit']);
    
