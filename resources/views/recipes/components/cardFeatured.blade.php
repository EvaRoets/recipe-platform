{{--This is the card that appears in the feed--}}

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
        <div class="card-image-container">
            <img class="card-image" alt="recipe-picture(s)" src={{ asset($data->image) }} />
        </div>
        <div class="card-buttons">
            <a href={{ route("save", ['postid' => $data->id]) }}>
                <button class="save-btn"><i class="fas fa-bookmark"></i></button>
            </a>
            <a href="">
                <button class="like-btn"><i class="fas fa-heart"></i></button>
            </a>
            <a href={{ route("details", ['postid' => $data->id]) }}>
                <button class="view-btn"><i class="fas fa-eye"></i></button>
            </a>
        </div>
    </div>
</div>


