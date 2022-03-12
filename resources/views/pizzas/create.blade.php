@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="post">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" name="name" id="name">
        <label for="name">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="name">Choose base type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label>Extra Topping:</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br/>
            <input type="checkbox" name="toppings[]" value="garlics">garlics <br/>
            <input type="checkbox" name="toppings[]" value="olives">olives <br/>
            <input type="checkbox" name="toppings[]" value="peppers">peppers <br/>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection