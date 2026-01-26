<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/students', [App\Http\Controllers\StudentController::class, 'index']);