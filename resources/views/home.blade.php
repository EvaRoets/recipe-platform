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
                        <a href={{ route("save", ['postid' => $data->id]) }}><button class="save"><i class="fas fa-heart"></i></button></a>
                        <a href=""><button class="like"><i class="fas fa-bookmark"></i></button></a>
                        <a href={{ route("details", ['postid' => $data->id]) }}><button class="fullView"><i class="fas fa-glasses"></i></button></a>
                    </div>
                </div>
            </div>
            <div class="card-featured-container">
                <div class="card-title">
                    {{--        TODO display title from database--}}
                    <h2>Shakshuka</h2>
                </div>
                <div class="card-gallery">
                    <div class="card-tags">
                        <badge>dinner</badge>
                        <badge>egg</badge>
                        <badge>tomato</badge>
                        <badge>middle eastern</badge>
                        <badge>vegetarian</badge>
                        <badge>healthy</badge>
                        {{--        TODO display tags from database--}}
                    </div>
                    {{--        TODO display image(s) from database --}}
                    <div class="card-image-container">
                        <img class="card-image" alt="recipe-picture(s)" src={{ asset('images/shakshuka.png') }} />
                    </div>
                    <div class="card-buttons">
                        <button class="save"><i class="fas fa-heart"></i></button>
                        <button class="like"><i class="fas fa-bookmark"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-featured-container">
                <div class="card-title">
                    {{--        TODO display title from database--}}
                    <h2>Shakshuka</h2>
                </div>
                <div class="card-gallery">
                    <div class="card-tags">
                        <badge>dinner</badge>
                        <badge>egg</badge>
                        <badge>tomato</badge>
                        <badge>middle eastern</badge>
                        <badge>vegetarian</badge>
                        <badge>healthy</badge>
                        {{--        TODO display tags from database--}}
                    </div>
                    {{--        TODO display image(s) from database --}}
                    <div class="card-image-container">
                        <img class="card-image" alt="recipe-picture(s)" src={{ asset('images/shakshuka.png') }} />
                    </div>
                    <div class="card-buttons">
                        <button class="save"><i class="fas fa-heart"></i></button>
                        <button class="like"><i class="fas fa-bookmark"></i></button>
                    </div>
                </div>
            </div>

        </div>
        <div class="create-container">
            <div class="create"></div>
            <button class="add"><i class="fas fa-plus-circle"></i></button>
        </div>
    </div>
    <script src="../../js/app.js"></script>
    <noscript>Your browser does not support JavaScript.</noscript>
            @endforeach
        </div>
    </div>
@endsection


