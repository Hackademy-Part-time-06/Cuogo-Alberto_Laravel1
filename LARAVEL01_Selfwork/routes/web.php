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

Route::get('/stringa', function () {
    return 'Esempio di Stringa';
});

Route::get('/intero', function () {
    return 24;
});

Route::get('/array', function () {
    $array = [
        'test1',
        12,
        'Prova di Array[2]'
    ];

    return $array[2];
});