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