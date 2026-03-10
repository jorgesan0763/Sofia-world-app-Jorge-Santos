<?php

use App\Http\Controllers\WorldController;
use Illuminate\Support\Facades\Route;

// Pantalla principal
Route::get('/', [WorldController::class, 'index']);

// Endpoint para obtener ciudades por país (llamada AJAX)
Route::get('/cities/{countryCode}', [WorldController::class, 'getCities']);