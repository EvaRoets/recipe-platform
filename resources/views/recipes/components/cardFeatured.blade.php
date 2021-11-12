{{--This is the card that appears in the feed--}}
<div class="card-featured-container">
    <div class="card-featured-title">
        <h2>{{ $data->title }}</h2>
    </div>
    <div class="card-featured-gallery">
        <div class="card-featured-tags">
            @foreach(explode(',', $data->tags) as $tag)
                <badge class="card-featured-badge">{{ $tag }}</badge>
            @endforeach
        </div>
        <div class="card-featured-image-container">
            <a href={{ route("details", ['postid' => $data->id]) }}>
                <img class="card-featured-image" alt="recipe-picture(s)" src={{ asset($data->image) }} />
            </a>

        </div>
        <div class="card-featured-buttons">
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


