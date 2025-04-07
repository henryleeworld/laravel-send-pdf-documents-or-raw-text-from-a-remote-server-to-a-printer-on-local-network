<?php

use App\Http\Controllers\PrinterController;
use Illuminate\Support\Facades\Route;

Route::get('/printer', [PrinterController::class, 'index']);
