<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/app.css">
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
                <label for="vegetables"><input type="radio" id="vegetables" name="main-ingredient" value="Vegetables">Vegetables</label><br>
                <label for="fruit"><input type="radio" id="fruit" name="main-ingredient" value="Fruits">Fruit</label><br>
                <label for="Chicken"><input type="radio" id="chicken" name="main-ingredient" value="Chicken">Chicken</label><br>
                <label for="Beef"><input type="radio" id="beef" name="main-ingredient" value="Beef">Beef</label><br>
                <label for="Pork"><input type="radio" id="pork" name="main-ingredient" value="Pork">Pork</label><br>
                <label for="Lamb"><input type="radio" id="lamb" name="main-ingredient" value="Lamb">Lamb</label><br>
                <label for="Game"><input type="radio" id="game" name="main-ingredient" value="Game">Game</label><br>
                <label for="Fish"><input type="radio" id="fish" name="main-ingredient" value="Fish">Fish</label><br>
                <label for="Seafood"><input type="radio" id="seafood" name="main-ingredient" value="Seafood">Seafood</label><br>
                <label for="Eggs"><input type="radio" id="eggs" name="main-ingredient" value="Eggs">Eggs</label><br>
                <label for="Cheese"><input type="radio" id="cheese" name="main-ingredient" value="Cheese">Cheese</label><br>
                <label for="Bread"><input type="radio" id="bread" name="main-ingredient" value="Bread">Bread</label><br>
                <label for="Pasta"><input type="radio" id="pasta" name="main-ingredient" value="Pasta">Pasta</label><br>
                <label for="Rice"><input type="radio" id="rice" name="main-ingredient" value="Rice">Rice</label><br>
                <label for="Potato"><input type="radio" id="potato" name="main-ingredient" value="Potato">Potato</label><br>
                <label for="Couscous"><input type="radio" id="couscous" name="main-ingredient" value="Couscous">Couscous</label><br>

                <br><label for="dish-type">Dish type</label><br>
                <label for="Breakfast"><input type="radio" id="breakfast" name="dish-type" value="Breakfast">Breakfast</label><br>
                <label for="Brunch"><input type="radio" id="brunch" name="dish-type" value="Brunch">Brunch</label><br>
                <label for="Lunch"><input type="radio" id="lunch" name="dish-type" value="Lunch">Lunch</label><br>
                <label for="Snack"><input type="radio" id="snack" name="dish-type" value="Snack">Snack</label><br>
                <label for="Dinner"><input type="radio" id="dinner" name="dish-type" value="Dinner">Dinner</label><br>
                <label for="Dessert"><input type="radio" id="dessert" name="dish-type" value="Dessert">Dessert</label><br>

                <br><label for="special-occasions">Special occasions</label><br>
                <label for="Vegetarian"><input type="radio" id="vegetarian" name="special-occasions" value="Vegetarian">Vegetarian</label><br>
                <label for="Vegan"><input type="radio" id="vegan" name="special-occasions" value="Vegan">Vegan</label><br>
                <label for="Dairy-free"> <input type="radio" id="dairy-free" name="special-occasions" value="Dairy-free">Dairy-free</label><br>
                <label for="Gluten-free"><input type="radio" id="gluten-free" name="special-occasions" value="Gluten-free">Gluten-free</label><br>

                <button type="submit" class="Search">Search recipes</button>
            </form>
        </div>
        <div class="feed">
            <div class="card-featured-container">
                <div class="card-gallery">
                    {{--        TODO display image(s) from database --}}
                    <img src="../../public/images/shakshuka.jpeg" alt="recipe-picture(s)"/>
                </div>
                <div class="card-title">
                    {{--        TODO display title from database--}}
                    <h4>Shakshuka</h4>
                </div>
                <div class="card-tags">
                    <badge>dinner</badge>
                    <badge>egg</badge>
                    <badge>tomato</badge>
                    <badge>middleeastern</badge>
                    <badge>vegetarian</badge>
                    <badge>healthy</badge>
                    {{--        TODO display tags from database--}}
                </div>
                <div class="card-buttons">
                    <button class="like">Like</button>
                    <button class="save">Save</button>
                </div>
            </div>
            <div class="card-featured-container">
                <div class="card-gallery">
                    {{--        TODO display image(s) from database --}}
                    <img src="../../public/images/shakshuka.jpeg" alt="recipe-picture(s)"/>
                </div>
                <div class="card-title">
                    {{--        TODO display title from database--}}
                    <h4>Shakshuka</h4>
                </div>
                <div class="card-tags">
                    <badge>dinner</badge>
                    <badge>egg</badge>
                    <badge>tomato</badge>
                    <badge>middleeastern</badge>
                    <badge>vegetarian</badge>
                    <badge>healthy</badge>

                    {{--        TODO display tags from database--}}
                </div>
                <div class="card-buttons">
                    <button class="like">Like </button>
                    <button class="save">Save </button>
                </div>
            </div>
            <div class="card-featured-container">
                <div class="card-gallery">
                    {{--        TODO display image(s) from database --}}
                    <img src="../../public/images/shakshuka.jpeg" alt="recipe-picture(s)"/>
                </div>
                <div class="card-title">
                    {{--        TODO display title from database--}}
                    <h4>Shakshuka</h4>
                </div>
                <div class="card-tags">
                    <badge>dinner</badge>
                    <badge>egg</badge>
                    <badge>tomato</badge>
                    <badge>middleeastern</badge>
                    <badge>vegetarian</badge>
                    <badge>healthy</badge>

                    {{--        TODO display tags from database--}}
                </div>
                <div class="card-buttons">
                    <button class="like">Like </button>
                    <button class="save">Save </button>
                </div>
            </div>
        </div>
        <div class="pop-up">
            <button class="Add">Add recipe</button>
        </div>
    </div>
@endsection
</body>


