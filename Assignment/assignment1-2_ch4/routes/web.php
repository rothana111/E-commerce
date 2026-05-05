<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
Assignment 1
*/
Route::get('/product/{id?}', function ($id = 100) {
    return "Product ID: " . $id;
})->where('id', '[0-9]+');

//for assignment 1 you gotta type: /product after url ,or /product/id (id from 1->100)



/*
Assignment 2
*/
Route::get('/dashboard', function () {
    return "Welcome to Dashboard";
})->middleware('authcheck');
//for assignment 2 you gotta type /dashboard after url