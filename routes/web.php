<?php

use App\Http\Controllers\WorldController;
use Illuminate\Support\Facades\Route;

// Principal
Route::get('/', [WorldController::class, 'index']);

// Endpoint ciudades por país
Route::get('/cities/{countryCode}', [WorldController::class, 'getCities']);