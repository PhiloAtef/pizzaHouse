@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index ">
    <h1>Pizza Orders</h1>
    @foreach ($pizzas as $pizza )
    <div class="pizza-item">
        <img src="/img/pizza.png" alt="pizza icon">
        <h4><a href="/pizzas/{{$pizza->id}}">{{$pizza->name}} </a></h4>
    </div>
    @endforeach
    <div class="flex-center">
        <a href="/" class="btn btn-primary mt-3 mx-3 bg-dark border-0">Go to Home</a>
        <a href="/pizzas/create" class="btn btn-primary mt-3 mx-3 bg-dark border-0 ">Add a New Pizza</a>
    </div>
</div>
        
@endsection
