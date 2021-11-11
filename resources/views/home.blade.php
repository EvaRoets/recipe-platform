@extends('layouts.layout')
@section('content')
    <div class="recipe-book-container">
        <div class="recipe-book-feed">
            <div class="recipe-book-details">
                <div class="recipe-book-title">
                    <h2>My recipes</h2>
                </div>
                <div class="recipe-filter">
                </div>
                <div class="recipe-book-box">
                    @foreach($posts as $key => $data)
                        @include('recipes.components.card')
                    @endforeach
                </div>
            </div>
        </div>
    </div>


{{--        <div class="home-container">--}}
{{--            <div class="home-feed">--}}
{{--                @foreach($posts as $key => $data)--}}
{{--                    @include('recipes.components.cardFeatured')--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--            <div class="create-container" id="create">--}}
{{--                <button class="add-btn"><i class="fas fa-plus-circle"></i></button>--}}
{{--            </div>--}}
{{--        </div>--}}
@endsection


