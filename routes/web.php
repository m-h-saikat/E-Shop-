<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;





Route::get('/', [frontController::class, 'index'])->name('home');
Route::get('/categoryProducts', [frontController::class, 'categoryProducts'])->name('categoryProducts');
