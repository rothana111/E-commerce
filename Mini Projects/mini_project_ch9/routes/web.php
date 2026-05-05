<?php
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Student
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students/store', [StudentController::class, 'store']);
Route::get('/students/edit/{id}', [StudentController::class, 'edit']);
Route::post('/students/update/{id}', [StudentController::class, 'update']);
Route::get('/students/delete/{id}', [StudentController::class, 'delete']);

// Classroom
Route::get('/classrooms', [ClassroomController::class, 'index'])->name('classrooms.index');
Route::get('/classrooms/create', [ClassroomController::class, 'create']);
Route::post('/classrooms/store', [ClassroomController::class, 'store']);
Route::get('/classrooms/edit/{id}', [ClassroomController::class, 'edit']);
Route::post('/classrooms/update/{id}', [ClassroomController::class, 'update']);
Route::get('/classrooms/delete/{id}', [ClassroomController::class, 'delete']);