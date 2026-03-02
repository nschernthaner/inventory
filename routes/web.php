<?php

use App\Http\Controllers\PageController;
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

});

Route::get('/impressum', function(){

});

Route::get('/featurelist', function(){
    return view('featurelist');
});


Route::get('/me', function(){

});

Route::get('/contact', [PageController::class, 'contact'])->name('pages.contact');

// Aufruf mit /inventory/1 => in der Funktion ist ein Parameter id mit dem Inhalt 1 vorhanden
Route::get('/inventory/{id}', [PageController::class, 'inventory']);
