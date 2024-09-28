<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Define a GET route for /profile/{id}
Route::get('/profile/{id}', [ProfileController::class, 'index']);
