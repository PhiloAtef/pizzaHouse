@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizzas List
        </div>
        @foreach ($pizzas as $pizza )
        <div>
        {{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}}
        </div>
        @endforeach
        <br>
        <a href="/">Go to Home</a>
        <br>
        <a href="/pizzas/create">Add a New Pizza</a>
    </div>
</div>
@endsection