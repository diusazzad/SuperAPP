<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlermController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('alarms', AlermController::class);
