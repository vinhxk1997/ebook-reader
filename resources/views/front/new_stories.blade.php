<div class="row">
    @foreach ($new_stories as $story)
    <div class="col-md-6 col-story">
        @include('front.story_item', ['story' => $story])
    </div>
    @endforeach
</div>