<?php

namespace App\Http\Livewire\Tweets;

use App\Tweet;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $perPage = 5;
    public $tweetId;

    protected $listeners = ['tweetAdded'];

    public function tweetAdded($tweetId)
    { }

    public function loadMore()
    {
        $this->perPage += 10;
    }

    public function render()
    {
        $tweets = Tweet::with('user')->latest()->paginate($this->perPage);

        return view('livewire.tweets.index', compact('tweets'));
    }
}
