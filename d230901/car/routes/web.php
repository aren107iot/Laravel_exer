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


Route::get('/car', function () {
    return view('car.index');
})->name('cars.index');

//網頁位置 ex localhost:8000/f1
Route::get('/f1', function () {
    //resource位置
    return view('car.f1');
    //val位置
})->name('cars.f1');

Route::get('/f2', function () {
    return view('car.f2');
})->name('cars.f2');

Route::get('/f3', function () {
    return view('car.f3');
})->name('cars.f3');


//-----分隔線-----

Route::get('/tasks', function () {
    
    $data = [
        [
            'id' => 1,
            'name' => 'amy'
        ],
        [
            'id' => 2,
            'name' => 'kk'
        ],
        [
            'id' => 3,
            'name' => 'dd'
        ],
        
    ];
    
    // return view('tasks', ['tasks' => Task::all()]);
    return view('tasks', ['tasks' => $data]);
});


//-----分隔線-----


Route::get('/Newfoods', function () {
    return view('Newfood.index');
})->name('Newfoods.index');