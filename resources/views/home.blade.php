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
                        <h4>This is the left page</h4>
                        <p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de
                            standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een
                            zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft
                            niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in
                            elektronische
                            letterzetting. Het is in de jaren '60 populair geworden met de introductie van Letraset
                            vellen
                            met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus
                            PageMaker die versies van Lorem Ipsum bevatten.</p>
                    </div>
                    <div class="vertical"></div>
                    <div class="right-page">
                        <h4>This is the right page</h4>
                        <p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de
                            standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een
                            zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft
                            niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in
                            elektronische
                            letterzetting. Het is in de jaren '60 populair geworden met de introductie van Letraset
                            vellen
                            met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus
                            PageMaker die versies van Lorem Ipsum bevatten.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    <div class="home-container">--}}
    {{--        <div class="home-feed">--}}
    {{--            @foreach($posts as $key => $data)--}}
    {{--                @include('recipes.components.cardFeatured')--}}
    {{--            @endforeach--}}
    {{--        </div>--}}
    {{--        <div class="create-container" id="create">--}}
    {{--            <button class="add-btn"><i class="fas fa-plus-circle"></i></button>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection


