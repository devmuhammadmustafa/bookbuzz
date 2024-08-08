<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::controller(AuthController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::controller(BookController::class)->prefix('books')->group(function(){
    Route::get('/', 'index');
    Route::get('/{id}', 'detail');
});

Route::controller(TagController::class)->prefix('tags')->group(function(){
    Route::get('/', 'index');
});

Route::middleware('auth:sanctum')->group( function () {


//    Route::get("/a", function () {
//        return 1;
//    });
    Route::get("/a", function () {
        return 1;
    });
});
