@extends('layouts.layout')
@section('content')
    <div class="home-container">
        <div class="feed">
            {{-- TODO verify @include() option to display multiple cardFeatured--}}
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
                    {{--        TODO display image(s) from database --}}
                    <div class="card-image-container">
                        <img class="card-image" alt="recipe-picture(s)" src={{ asset($data->image) }} />
                    </div>
                    <div class="card-buttons">
                        <button class="save"><i class="fas fa-heart"></i></button>
                        <button class="like"><i class="fas fa-bookmark"></i></button>
                    </div>
                </div>
            </div>
            @endforeach
            
@endsection


