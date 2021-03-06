@extends('layouts.layout')
@section('content')
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
{{--                    TODO: switch to textarea--}}
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
@endsection
{{--TODO optional check for input attributes--}}
{{--TODO optional add dropdown with selectable ingredient quantities--}}
{{--TODO optional let user add additional row--}}
{{--TODO optional add ingredients and quantities with pictures--}}
{{--TODO optional adjust ingredients depending on nu;ber of persons for recipe--}}
{{--TODO optional add how long it takes to cook the recipe--}}


