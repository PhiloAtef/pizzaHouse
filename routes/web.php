<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    return view('pizzas');
});