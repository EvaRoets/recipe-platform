<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../css/app.css">
    <title>Recipes TBD</title>
</head>
<body>


@extends('layouts.layout')
@section('content')
    <div class="home-container">
        <div class="home-filter">
            <p>Find your recipe of choice</p>
            <form>
                <br><label for="main-ingredient">Main ingredient</label><br>
                {{-- TODO check for proper list--}}
                <input type="radio" id="vegetables" name="main-ingredient" value="Vegetables"><label for="vegetables">Vegetables</label><br>
                <input type="radio" id="fruit" name="main-ingredient" value="Fruits"><label for="fruit">Fruit</label><br>
                <input type="radio" id="chicken" name="main-ingredient" value="Chicken"><label for="Chicken">Chicken</label><br>
                <input type="radio" id="beef" name="main-ingredient" value="Beef"><label for="Beef">Beef</label><br>
                <input type="radio" id="pork" name="main-ingredient" value="Pork"><label for="Pork">Pork</label><br>
                <input type="radio" id="lamb" name="main-ingredient" value="Lamb"><label for="Lamb">Lamb</label><br>
                <input type="radio" id="game" name="main-ingredient" value="Game"><label for="Game">Game</label><br>
                <input type="radio" id="fish" name="main-ingredient" value="Fish"><label for="Fish">Fish</label><br>
                <input type="radio" id="seafood" name="main-ingredient" value="Seafood"><label for="Seafood">Seafood</label><br>
                <input type="radio" id="eggs" name="main-ingredient" value="Eggs"><label for="Eggs">Eggs</label><br>
                <input type="radio" id="cheese" name="main-ingredient" value="Cheese"><label for="Cheese">Cheese</label><br>
                <input type="radio" id="bread" name="main-ingredient" value="Bread"><label for="Bread">Bread</label><br>
                <input type="radio" id="pasta" name="main-ingredient" value="Pasta"><label for="Pasta">Pasta</label><br>
                <input type="radio" id="rice" name="main-ingredient" value="Rice"><label for="Rice">Rice</label><br>
                <input type="radio" id="potato" name="main-ingredient" value="Potato"><label for="Potato">Potato</label><br>
                <input type="radio" id="couscous" name="main-ingredient" value="Couscous"><label for="Couscous">Couscous</label><br>

                <br><label for="dish-type">Dish Type</label><br>
                <input type="radio" id="breakfast" name="dish-type" value="Breakfast"><label for="Breakfast">Breakfast</label><br>
                <input type="radio" id="brunch" name="dish-type" value="Brunch"><label for="Brunch">Brunch</label><br>
                <input type="radio" id="lunch" name="dish-type" value="Lunch"><label for="Lunch">Lunch</label><br>
                <input type="radio" id="snack" name="dish-type" value="Snack"><label for="Snack">Snack</label><br>
                <input type="radio" id="dinner" name="dish-type" value="Dinner"><label for="Dinner">Dinner</label><br>
                <input type="radio" id="dessert" name="dish-type" value="Dessert"><label for="Dessert">Dessert</label><br>

                <br><label for="special-occasions">Special occasions</label><br>
                <input type="radio" id="vegetarian" name="special-occasions" value="Vegetarian"><label for="Vegetarian">Vegetarian</label><br>
                <input type="radio" id="vegan" name="special-occasions" value="Vegan"><label for="Vegan">Vegan</label><br>
                <input type="radio" id="dairy-free" name="special-occasions" value="Dairy-free"><label for="Dairy-free">Dairy-free</label><br>
                <input type="radio" id="gluten-free" name="special-occasions" value="Gluten-free"><label for="Gluten-free">Gluten-free</label><br>

                <button type="submit" class="Search">Search recipes</button>
            </form>
        </div>
        <div class="feed">
            <div class="card-featured">
                <?= $cardFeatured; ?>
            </div>

        </div>
        <div class="pop-up">
            <button class="Add">Add recipe</button>
        </div>
    </div>
@endsection
</body>


