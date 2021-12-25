<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\frontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [frontController::class, 'index'])->name('home');
Route::get('/categoryProducts', [frontController::class, 'categoryProducts'])->name('categoryProducts');
Route::get('/addBlog', [BlogController::class, 'addBlog'])->name('addBlog');
Route::post('/newBlog', [BlogController::class, 'newBlog'])->name('newBlog');
Route::get('/manageBlog', [BlogController::class, 'manageBlog'])->name('manageBlog');
Route::get('/deleteBlog/{id}', [BlogController::class, 'deleteBlog'])->name('deleteBlog');
Route::get('/editBlog/{id}', [BlogController::class, 'editBlog'])->name('editBlog');
Route::post('/updateBlog', [BlogController::class, 'updateBlog'])->name('updateBlog');

