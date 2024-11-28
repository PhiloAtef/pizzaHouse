@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details
 ">
    <h1>Order for {{$pizza->name}}</h1>
    <p class="type">Type - {{$pizza->type}}</p> 
    <p class="base">Base - {{$pizza->base}}</p>
    <p class="toppings">Extra Toppings:</p>
    <ul>
        @foreach($pizza->toppings as $topping)
            <li>{{$topping}}</li>
        @endforeach
    </ul>
    <form action="{{route('pizzas.destroy',$pizza->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete Order</button>
    </form>
   <a href="/pizzas" class="btn btn-primary mt-3 bg-dark border-0" >back to all pizzas</a>
</div>

@endsection