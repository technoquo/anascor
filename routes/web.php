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
    return view('home', ["title" => 'Asociacion Nacional de Sordos de Costa Rica']);
});

Route::get('/historia', function () {
    return view('history');
});

Route::get('/comisiones', function () {
    return view('comisiones');
});

Route::get('/contacto', function () {
    return view('contact');
});

Route::get('/junta-directiva', function () {
    return view('boards');
});


Route::get('/servicios', function () {
    return view('menus.service');
});

Route::get('/galleria', function () {
    return view('menus.gallery');
});

Route::get('/estatutos', function () {
    return view('menus.estatutos');
});

Route::get('/acceso', function () {
    return view('menus.asociados');
});

Route::get('/aniversario', function () {
    return view('menus.aniversario');
});


Route::get('/academias', function () {
    return view('menus.academias');
});

Route::get('/convenios', function () {
    return view('menus.convenios');
});
