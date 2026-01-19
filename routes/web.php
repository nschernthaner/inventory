<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function(){
    return "Hallo, Welt!";
});

Route::get('/about', function(){
   return "<html><title>About</title><body><h1>About me</h1></body></html>";
});

Route::get('/impressum', function(){
    return view('impressum');
});



Route::get('/me', function(){
    return view('test');
});
