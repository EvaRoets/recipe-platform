{{--TODO check for input attributes--}}
{{--TODO add dropdown with selectable ingredient quantities--}}
{{--TODO let user add additional row--}}
{{--TODO add ingredients and quantities with pictures--}}
{{--TODO adjust ingredients depending on nu;ber of persons for recipe--}}
{{--TODO add how long it takes to cook the recipe--}}

@extends('layouts.layout')
@section('content')
    <div class="create-recipe-container">
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
                    <input type="text" id="title" name="title" placeholder="Title">
                </div>
                <div class="create-tags">
                    <input type="text" id="tags" name="tags" placeholder="Tag(s)">
                    <p class="input-instruction"><sup>* Separated by commas</sup></p>
                </div>
                <div class="create-ingredients">
                    <input type="text" name="ingredients" id="ingredients" placeholder="Ingredients">
                    <p class="input-instruction"><sup>* Separated by commas</sup></p>
                </div>
                <div class="create-instructions">
                    <input type="text" name="description" placeholder="Instructions">
                    <p class="input-instruction"><sup>* Separated by commas</sup></p>
                </div>

                <a href="">
                    <button class="post" type="submit"><i class="fas fa-plus-circle"></i></button>
                </a>
            </div>
        </form>
    </div>
@endsection

