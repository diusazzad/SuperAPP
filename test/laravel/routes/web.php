<?php

use App\Http\Controllers\AlarmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alarms', [AlarmController::class,'index']);
