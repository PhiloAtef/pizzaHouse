@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/img/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>
        <p class="success">{{session('success')}}</p>
        <a href="{{route('pizzas.create')}}" class="btn btn-primary mt-3 bg-dark border-0">Order a Pizza</a> <br>
        <a href="/pizzas" class="btn btn-primary mt-3 bg-dark border-0">See your Pizzas</a>
    </div>
</div>
@endsection