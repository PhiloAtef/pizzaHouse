@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name" >

        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margherita">margherita</option>
            <option value="hawaiian">hawaiian</option>
            <option value="veg supreme">veg suprene</option>
            <option value="cheese lovers">cheese lovers</option>
        </select>

        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">cheesy crust</option>
            <option value="garlic crust">garlic crust</option>
            <option value="thin & crispy">thin & crispy</option>
            <option value="thick">thick</option>
        </select>
        <label for="price">price :</label>
        <input type="number" name="price" id="price">
        <fieldset>
            <label>Extra toppings:</label><br>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br/>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br/>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
            <input type="checkbox" name="toppings[]" value="olives">Olives<br/>

        </fieldset>
        <input type="submit" value="Order Pizza"> <a href="/pizzas" class="btn btn-primary bg-dark border-0">Back</a>
    </form>
</div>
@endsection