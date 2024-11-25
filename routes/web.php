<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'thin & crispy']
    ];

    $name =  request('name');

    return view('pizzas', [
        'pizzas' => $pizzas,
        'name'=> $name,
        'age' => request('age'),
    ]);
});

Route::get('/pizzas/{id}', function ($id) {
    //query data base with the $id
    return view('details', ['id' => $id]);
});