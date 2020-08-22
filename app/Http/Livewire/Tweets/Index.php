<?php

namespace App\Http\Livewire\Tweets;

use App\Tweet;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $perPage = 3;

    public function loadMore()
    {
        $this->perPage += 3;
    }

    public function render()
    {
        $tweets = Tweet::latest()->paginate($this->perPage);

        return view('livewire.tweets.index', compact('tweets'));
    }
}
