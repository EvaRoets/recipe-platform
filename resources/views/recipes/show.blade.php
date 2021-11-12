{{--This is the card that shows a recipe in full--}}
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
                        <badge class="card-featured-badge">{{ $tag }}</badge>
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
                <div class="show-buttons">
                    <a href={{ route("save", ['postid' => $details->id]) }}>
                        <button class="save-btn"><i class="fas fa-bookmark"></i></button>
                    </a>
                    <a href="{{ route('home') }}">
                        <button class="home-btn" type="submit" name="home" value="home">
                            <i class="fas fa-home"></i>&nbsp</br>
                        </button>
                    </a>
                </div>

            </div>
        </div>
        <div class="create-container" id="create">
            <button class="add-btn"><i class="fas fa-plus-circle"></i></button>
            {{--            @include('recipes.components.create')--}}
            {{--            TODO: check why include link doesn't work --}}
            <div class="create-recipe-container">
                {{-- Check for errors --}}
                @if ($message = Session::get('error'))
                    <strong>{{ $message }}</strong>
                @endif
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="create-feed">
                    <form method="post" action={{ route("createPost") }} enctype="multipart/form-data">
                        @csrf
                        <span class="close-btn">&times;</span>
                        <div class="create-recipe-title">
                            <h2>Add recipe</h2>
                        </div>
                        <div class="create-box">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title">
                            <label for="image">Image(s)</label>
                            <div class="create-file">
                                <input type="file" id="image" name="image" multiple>
                            </div>
                            <label for="tags">Tag(s)</label>
                            <input type="text" id="tags" name="tags">
                            <label for="ingredients">Ingredients</label>
                            <input type="text" name="ingredients" id="ingredients">
                            <label for="Instructions">Instructions</label>
                            <input type="text" name="description">
                            <div class="create-btn-container">
                                <a href="">
                                    <button class="post-btn" type="submit">
                                        <i class="fas fa-plus-circle"></i>&nbsp; Add
                                    </button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
