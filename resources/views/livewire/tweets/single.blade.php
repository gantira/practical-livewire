<div>
    <h5 class="mb-0">{{ $tweet->user->name }}</h5>
    <div class="media">
        <div class="media-body">
            <small class="text-secondary">Tweeted {{ $tweet->created_at->diffForHumans() }}</small>
            <p>{{ $tweet->body }}</p>
        </div>
    </div>
</div>
