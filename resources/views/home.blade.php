@extends('layouts.layout')
@section('content')
    <div class="home-container">
        <div class="home-feed">
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
                        <div class="card-buttons">
                            <a href={{ route("save", ['postid' => $data->id]) }}>
                                <button class="save"><i class="fas fa-heart"></i></button>
                            </a>
                            <a href="">
                                <button class="like"><i class="fas fa-bookmark"></i></button>
                            </a>
                            <a href={{ route("details", ['postid' => $data->id]) }}>
                                <button class="view"><i class="fas fa-eye"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

{{--            <div class="create-container">--}}
{{--                <div class="create"></div>--}}
{{--                <button class="add"><i class="fas fa-plus-circle"></i></button>--}}
{{--            </div>--}}
        </div>
    </div>
    <script src="../js/app.js"></script>
    <noscript>Your browser does not support JavaScript.</noscript>
@endsection


