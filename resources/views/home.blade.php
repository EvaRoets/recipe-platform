@extends('layouts.layout')
@section('content')
    <p>This is the home page</p>
    <div class="home-container">
        <div class="home-filter">

        </div>
        <div class="feed">
        @include('recipes.components.cardFeatured')
        </div>
        <div class="pop-up">
            <button class="Add">Add recipe</button>
        </div>
    </div>
@endsection
