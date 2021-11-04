@extends('layouts.layout')
@section('content')
    <p>This is the recipe book page</p>
    <div class="recipe-book-container">
        <div class="recipe-filter">

        </div>
        <div class="left-page">
            @foreach($posts as $key => $data)
                <div class="card-featured-container">
                    <div class="card-title">
                        <h2>{{ $data->title }}</h2>
                    </div>
                    <div class="card-gallery">
                        <div class="card-tags">
                            @foreach(explode(',', $data->tags) as $tag)
                                <badge>{{ $tag }}</badge>
                            @endforeach
                        </div>
                        <div class="card-image-container">
                            <img class="card-image" alt="recipe-picture(s)" src={{ asset($data->image) }} />
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="right-page">

        </div>
    </div>
@endsection
