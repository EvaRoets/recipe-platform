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
        <div class="create-gallery">
                <label for="image">Upload image</label>
                <input type="file" id="image" name="image">
        </div>
        <div class="create-title">
                <label for="title">Add title</label>
                <input type="text" id="title" name="title">
        </div>
        <div class="create-tags">
                <label for="tags">Add tag(s)(seperate with a ',')</label>
                <input type="text" id="tags" name="tags">
        </div>
        <div class="create-ingredients">
                <label for="ingredients">Add ingredients(seperate with a ',')</label>
                <input type="text" name="ingredients" id="ingredients">
        </div>
        <div class="instructions">
                <label for="description">Add instructions</label>
                <input type="text" name="description">
        </div>
        <input type="submit" value="Save Post">
    </form>
</div>

@endsection

