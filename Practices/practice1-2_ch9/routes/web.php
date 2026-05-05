<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'show']);
Route::get('/add-students', [StudentController::class, 'createStudents']);
Route::get('/update/{id}', [StudentController::class, 'update']);
Route::get('/delete/{id}', [StudentController::class, 'delete']);