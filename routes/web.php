<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', 'PizzaController@index')->middleware('auth');
Route::get('/pizzas/create', 'PizzaController@create');
Route::post('/pizzas','PizzaController@store');
Route::get('/pizzas/{id}', 'PizzaController@show')->middleware('auth');
Route::delete('/pizzas/{id}','PizzaController@destroy')->middleware('auth');

Auth::routes([
    'register'=> false
]);


Route::get('/home', 'HomeController@index')->name('home');
