<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Foundation\Application;


Route::get('/', function () {
    return view('welcome');
});

Route::resource("/contact", ContactController::class);