@extends('layouts.layout')
@section('content')
    <h1>{{ $details->title }}</h1>
    <div class="recipe-container">
        <div class="posted-gallery">
            <img src={{ asset($details->image) }} alt={{ $details->title }}>
        </div>
        <div class="posted-tags">
            @foreach(explode(',', $details->tags) as $tag)
                <badge>{{ $tag }}</badge>
            @endforeach
        </div>
        <div class="posted-ingredients">
            <ul>
                @foreach(explode(',', $details->ingredients) as $ingredient)
                    <li>{{ $ingredient }}</li>
                @endforeach
            </ul> 
        </div>
        <div class="posted-instructions">
            <p>{{ $details->description }}</p>
        </div>
    </div>
@endsection
