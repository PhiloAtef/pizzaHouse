@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
    @foreach ($pizzas as $pizza )
    <div class="pizza-item">
        <img src="/img/pizza.png" alt="pizza icon">
        <h4><a href="/pizzas/{{$pizza->id}}">{{$pizza->name}} </a></h4>
    </div>
    @endforeach
    <br>
    <a href="/">Go to Home</a>
    <br>
    <a href="/pizzas/create">Add a New Pizza</a>
</div>
        
@endsection
