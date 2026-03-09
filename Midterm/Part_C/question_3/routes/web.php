<?php

use Illuminate\Support\Facades\Route;


Route::get('/stu', function () {
    return view("student");
});