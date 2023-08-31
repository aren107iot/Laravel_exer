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
// $url = route('route.name');
// $url = route('helloF1');
// dd($url);

    // return view('front.hall');
$option = ['+','*','/'];
$getOption = $op
$data = [
    's1'=>'amy',
    's2'=>'bob',
    's3'=>'cat'
];

return view('front.hall', ['data123',$data]);
// return view('front.hall') -> with('data123',$data);

});


    Route::get('/f1', function () {
        return view('front.f1');
    })->name('helloF1');
    Route::get('/f2', function () {
        return view('front.f2');
    });
    Route::get('/f3', function () {
        return view('front.f3');
    });