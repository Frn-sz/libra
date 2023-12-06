<?php

use Illuminate\Support\Facades\Route;

Route::get("/login", [\App\Http\Controllers\User\UserController::class, "index"]);
