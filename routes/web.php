<?php


use Illuminate\Support\Facades\Route;

include_once "user_routes.php";

Route::get('home', function () {
    return view('home');
})->middleware('auth');

