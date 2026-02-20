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

Route::get('/featurelist', function(){
    return view('featurelist');
});


Route::get('/me', function(){
    return view('test');
});

Route::get('/contact', function(){

    $firstname = 'Max';
    $surname = 'Muster';

    return view('contact', [
        'fname' => $firstname,
        'sname' => $surname
    ]);
})->name('pages.contact');

// Aufruf mit /inventory/1 => in der Funktion ist ein Parameter id mit dem Inhalt 1 vorhanden
Route::get('/inventory/{id}', function($id) {

    //$info = 'Lenovo ThinkCenter';
    //$info = '<script>window.top.location="https://www.hakzell.at";</script>';
    $info = 'Der <strong>PC</strong> funktioniert perfekt.';

    return view('inventory', [
        'id' => $id,
        'info' => $info
    ]);
});
