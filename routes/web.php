<?php

use App\Http\Controllers\GeminiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/gemini/interpretar', [GeminiController::class, 'interpretar']);
