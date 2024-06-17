<?php

use App\Http\Controllers\GalleriaController;
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

Route::get('/quienes', function () {
    return view('quienes');
});

Route::get('/mision', function () {
    return view('mision');
});

Route::get('/vision', function () {
    return view('vision');
});


Route::get('/valores', function () {
    return view('valores');
});


Route::get('/comites', function () {
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

Route::get('/galleria', [GalleriaController::class, 'index']);

Route::get('/expresidentes', function () {
    return view('menus.expresidentes');
});

Route::get('/estructura', function () {
    return view('menus.estructura');
});

Route::get('/acceso', function () {
    return view('menus.asociados');
});

Route::get('/historia', function () {
    return view('menus.historia');
});


Route::get('/academias', function () {
    return view('menus.academias');
});

Route::get('/convenios', function () {
    return view('menus.convenios');
});

Route::get('/noticia', function () {
    return view('new');
});

Route::get('/noticias', function () {
    return view('news');
});
