<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/helloworld', function () {
//     return 'hello world';
//     // return view('class');
// });

Route::get('/home', function () {
    // return view('home')
    return view('home');
});

// Route::get('/class', function () {
//     return view('class');
// });
