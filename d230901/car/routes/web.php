<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('car.index');
})->name('cars.index');

Route::get('/f1', function () {
    return view('car.f1');
})->name('cars.f1');

Route::get('/f2', function () {
    return view('car.f2');
})->name('cars.f2');

Route::get('/f3', function () {
    return view('car.f3');
})->name('cars.f3');
