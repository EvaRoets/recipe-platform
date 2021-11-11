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
                                    <a href={{ route("details", ['postid' => $data->id]) }}>
                                        <button class="view-btn"><i class="fas fa-glasses"></i></button>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="right-page">
                    </div>
                </div>
            </div>
        </div>
        <div class="create-container" id="create">
            <button class="add-btn"><i class="fas fa-plus-circle"></i></button>
        </div>
    </div>
@endsection
