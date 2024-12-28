<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Book', [BookController::class, 'index']);
Route::get('/Book/create', [BookController::class, 'create']);
Route::get('/category', [CategoryController::class,'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::Class,'store']);