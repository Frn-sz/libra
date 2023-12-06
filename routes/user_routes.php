<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'user'], function () {

    //Rotas Get
    Route::get("/login", [UserController::class, "login"]);
    Route::get("/register", [UserController::class, "register"]);
    
    //Rotas Post
    Route::post("/login", [UserController::class, "authenticate,"]);
});
