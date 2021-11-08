@extends('layouts.layout')
@section('content')
    <div class="home-container">
        <div class="home-feed">
            @foreach($posts as $key => $data)
                @include('recipes.components.cardFeatured')
            @endforeach
        </div>
        <div class="create-container" id="create">
            <button class="add-btn"><i class="fas fa-plus-circle"></i></button>
        </div>
    </div>
<script src="../js/app.js"></script>
<noscript>Your browser does not support JavaScript.</noscript>
@endsection


