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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nando', function () {
    return ('<h1>Branch Nando</h1>');
});

Route::get('/galang', function () {
    return ('<h1> galang</h1>');
});

Route::get('/nambah', function () {
    return ('<h1> nambah</h1>');
});
// nambah
