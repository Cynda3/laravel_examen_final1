<?php

Route::view('/', "welcome");



Route::get('/ejercicio2', 'AlumnoController@index')->name('ejercicio2');

Route::get('/lista', 'AlumnoController@listar')->name('lista');

Route::get('/ejercicio4', 'ApiStarWars@index');


Route::get('/ejercicio5', 'AlumnoControllerConRecurso@store');