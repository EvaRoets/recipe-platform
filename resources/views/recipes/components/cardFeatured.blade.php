<div class="card-featured-container">
    <div class="card-title">
        {{--        TODO display title from database--}}
        <h4>Shakshuka</h4>
    </div>
    <div class="card-gallery">
        {{--        TODO display image(s) from database --}}
        <img alt="recipe-picture(s)" src={{ asset('images/shakshuka.png') }} />
    </div>
    <div class="card-tags">
        <badge>dinner</badge>
        <badge>egg</badge>
        <badge>tomato</badge>
        <badge>middleeastern</badge>
        <badge>vegetarian</badge>
        <badge>healthy</badge>
        {{--        TODO display tags from database--}}
    </div>
    <div class="card-buttons">
        {{--                    <button class="like"><img alt="like-icon" class="like-icon" src={{ asset('images/like-icon.png') }} /></button>--}}
        <button class="save"><i class="fas fa-heart"></i></button>
        <button class="like"><i class="fas fa-bookmark"></i></button>
    </div>
</div>
