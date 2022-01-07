<?php

namespace App\Http\Livewire\Client\Press;

use App\Models\News;
use Livewire\Component;
use Illuminate\Support\Facades\App;

class LatestNews extends Component
{
    public $count = 3;
    public $news;

    public function mount(){
        $this->news = News::latest()->get()->take($this->count);
    }

    public function readmore(){
        $this->count = $this->count+3;
        $this->mount();
    }

    public function render()
    {
        return view('livewire.client.press.latest-news');
    }
}
