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
            <form method="post" action={{ route("createpost") }} enctype="multipart/form-data">
                @csrf
                <div class="create-post">
                    <div class="create-recipe-title">
                        <h2>Add your recipe</h2>
                    </div>
                    <div class="create-gallery">
                        <label for="image">Upload image</label>
                        <input type="file" id="image" name="image" multiple>
                    </div>
                    <div class="create-title">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title">
                    </div>
                    <div class="create-tags">
                        <label for="tags">Tag(s)</label>
                        <input type="text" id="tags" name="tags">
                    </div>
                    <div class="create-ingredients">
                        <label for="ingredients">Ingredients</label>
                        <input type="text" name="ingredients" id="ingredients">
                    </div>
                    <div class="create-instructions">
                        <label for="Instructions">Instructions</label>
                        <input type="text" name="description">
                    </div>
                    <div class="btn-container">
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

{{--TODO check for input attributes--}}
{{--TODO add dropdown with selectable ingredient quantities--}}
{{--TODO let user add additional row--}}
{{--TODO add ingredients and quantities with pictures--}}
{{--TODO adjust ingredients depending on nu;ber of persons for recipe--}}
{{--TODO add how long it takes to cook the recipe--}}


