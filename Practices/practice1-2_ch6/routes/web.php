<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile', [
        'name' => 'seonghyeon',
        'age' => 17
    ]);
});

Route::get('/students', function () {
    return view('students', [
        'students' => ['sangwon', 'Jungwon', 'ricky', 'minkyu','juhoon', 'keonho', 'martin', ]
    ]);
});