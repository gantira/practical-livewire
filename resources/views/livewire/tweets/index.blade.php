<div>
    <div class="card ">
        <div class="card-header">Timeline</div>
        <div class="card-body">
            @foreach ($tweets as $tweet)
                <livewire:tweets.single :key="$tweet->id" :tweet="$tweet">
            @endforeach

            {{-- {{ $tweets->links() }} --}}

            @if ($tweets->hasMorePages())
                <button class="btn btn-primary" type="button" wire:click.prevent="loadMore">Load More!</button>
            @endif
        </div>
    </div>
</div>
