<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// this is practice 1
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

//this is practice 2
Route::get('/greet/{name}', function($name){
    return view('greet', ['name'=> $name]);
})->name('user.greet');
//for this ↑ you gotta type /greet/name  not  /user/name or just /user