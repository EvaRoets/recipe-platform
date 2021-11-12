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
{{--                    TODO add message if recipe book is empty--}}
                    @foreach($posts as $key => $data)
                        @include('recipes.components.card')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
