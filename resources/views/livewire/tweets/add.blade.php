<div>
    <div class="card">
        <div class="card-header">Update your tweet.</div>
        <div class="card-body">
            <form action="#" method="post" wire:submit.prevent="addTweet">
                <div class="form-group">
                    <textarea style="resize: none" class="form-control" placeholder="What's on your mind ?" wire:model="body">
                    </textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Tweet</button>
                </div>
            </form>
        </div>
    </div>
</div>
