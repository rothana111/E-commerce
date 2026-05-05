<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

$students = [
    1 => ['name' => 'Alice', 'age' => 20, 'major' => 'Math'],
    2 => ['name' => 'Bob', 'age' => 22, 'major' => 'Physics'],
    3 => ['name' => 'Charlie', 'age' => 21, 'major' => 'Chemistry'],
];

Route::get('/students', function() use ($students) {
    return view('students.index', compact('students'));
})->name('students.index');

Route::get('/student/{id}', function($id) use ($students) {
    $student = $students[$id] ?? null;
    if (!$student) abort(404);
    return view('students.show', compact('student'));
})->name('students.show');