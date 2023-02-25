<?php

namespace App\Http\Livewire\Client\Home;

use App\Models\News;
use Livewire\Component;

class LatestNews extends Component
{
    public $news;

    public function mount()
    {
        $this->news = News::latest()->get()->take(3);
    }

    public function render()
    {
        return view('livewire.client.home.latest-news');
    }
}
