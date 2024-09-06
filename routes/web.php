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

Route::get('/hello', function () { 
    return 'Hello World'; 
});

Route::get('/world', function () { 
    return 'World'; 
});

Route::get('/user/{Ervan}', function ($name) { 
    return 'Ervan Ardian'.$name;
});

Route::get('/articles/{id}', function ($articlesId) { 
    return "Halaman Artikel dengan ID {id} ".$articlesId; 
});

Route::get('/user/{name?}', function ($name='John') { 
    return 'Ervan Ardian'.$name; 
});