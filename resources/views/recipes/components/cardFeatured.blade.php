{{--This is the card that appears in the feed--}}
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

