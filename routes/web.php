<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', 'PizzaController@index');
Route::get('/pizzas/create', 'PizzaController@create');
Route::post('/pizzas','PizzaController@store');
Route::get('/pizzas/{id}', 'PizzaController@show');
