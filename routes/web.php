<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RandomController;
use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', function(){
//return "Hallo, Welt!";
//});

//Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/me', [PageController::class, 'me']);

Route::get('/impressum', [PageController::class, 'impressum']);

Route::get('/contact', [PageController::class, 'contact'])
    ->name('contact');

Route::get('/impressum/{info}', [PageController::class, 'impressum']);

Route::get('/items', [ItemController::class, 'index']);


Route::get('/student', [RandomController::class, 'show'])
    ->middleware(['auth'])
    ->name('student');;

Route::post('/student', [RandomController::class, 'show'])
    ->name('student.select')
    ->middleware(['auth']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/schools', [SchoolController::class, 'index'])
    ->middleware(['auth'])
    ->name('schools.index');

Route::post('/schools',[SchoolController::class, 'store'])
    ->name('school.store')
    ->middleware(['auth']);

Route::delete('/rooms/{room}', [RoomController::class, 'destroy'])
    ->name('rooms.destroy')->middleware(['auth']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/rooms', [RoomController::class, 'index'])
    ->middleware(['auth'])
    ->name('rooms.index');

Route::post('/rooms', [RoomController::class, 'store'])
    ->middleware(['auth'])
    ->name('rooms.store');

require __DIR__.'/auth.php';


