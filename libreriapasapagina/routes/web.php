<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

//De forma interna laravel crea una serie de rutas, en concreto 7, las que nos crea en el controlador
Route::resource('libro', LibroController::class);

//El metodo confrimDestroy hay que ponerlo por separado porque no te o crea por defecto
Route::get('/libro/{libro}/confirm', [LibroController::class, 'confirmDestroy'])->name('libro.confirmDestroy');
