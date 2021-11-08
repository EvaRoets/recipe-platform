@extends('layouts.layout')
@section('content')
    <div class="show-recipe-container">
        <div class="show-feed">
            <div class="show-recipe">
                <div class="show-title">
                    <h2>{{ $details->title }}</h2>
                </div>
                <div class="show-image-container">
                    <img class="show-image" src={{ asset($details->image) }} alt={{ $details->title }}>
                </div>
                <div class="show-tags">
                    @foreach(explode(',', $details->tags) as $tag)
                        <badge>{{ $tag }}</badge>
                    @endforeach
                </div>
                <div class="show-ingredients">
                    <h3>Ingredients</h3>
                    <ul>
                        @foreach(explode(',', $details->ingredients) as $ingredient)
                            <li>{{ $ingredient }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="show-instructions">
                    <h3>Instructions</h3>
                    <p>{{ $details->description }}</p>
                </div>
            </div>
        </div>
        <div class="create-container" id="create">
            <button class="add-btn"><i class="fas fa-plus-circle"></i></button>
        </div>
    </div>
@endsection
