<?php

use Lib\Route;

use App\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', function () {
    return 'Hola desde la pagina de contacto';
});

Route::get('/about', function () {
    return 'Hola desde la pagina acerca de';
});

Route::get('/ourses/:slug', function ($slug) {
    return "El curso es: . $slug";
});


Route::dispatch();