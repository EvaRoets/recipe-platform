{{--This is the card that appears in the recipe book--}}
<div class="card-container">
    <div class="card-title">
        <p>{{ $data->title }}</p>
    </div>
    <div class="card-gallery">
        <div class="card-tags">
            @foreach(explode(',', $data->tags) as $tag)
                <badge class="card-badge">{{ $tag }}</badge>
            @endforeach
        </div>
        <div class="card-image-container">
            <a href={{ route("details", ['postid' => $data->id]) }}>
                <img class="card-image" alt="recipe-picture(s)" src={{ asset($data->image) }} />
            </a>
        </div>
        <div class="card-buttons">
            <a href={{ route("save", ['postid' => $data->id]) }}>
                <button class="save-btn-card"><i class="fas fa-bookmark"></i></button>
            </a>
            <a href="">
                <button class="like-btn-card"><i class="fas fa-heart"></i></button>
            </a>
            <a href={{ route("details", ['postid' => $data->id]) }}>
                <button class="view-btn-card"><i class="fas fa-eye"></i></button>
            </a>
        </div>
    </div>
</div>
