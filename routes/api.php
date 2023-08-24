<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagenController;

use App\Http\Controllers\ArduinoController;

Route::post('/datos', [ArduinoController::class, 'recibirDatos']);
Route::post('/api/subir_imagen', 'ImagenController@subirImagen');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
