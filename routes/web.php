<?php

use App\Http\Controllers\cursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

/*
Route::get('/', homeController::class);
Route::get('cursos', [cursoController::class, 'index']);
Route::get('cursos/create', [cursoController::class, 'create']);
Route::get('cursos/{curso}', [cursoController::class, 'show']);
*/

Route::get('/', homeController::class);

Route::controller(cursoController::class)->group(function(){
    Route::get('cursos', 'index')->name('cursos.index');
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::post('cursos', 'store')->name('cursos.store');
    Route::get('cursos/{curso}', 'show')->name('cursos.show');
    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
    Route::put('cursos/{curso}', 'update')->name('cursos.update');
});

