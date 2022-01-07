<?php

namespace App\Http\Livewire\Client\Home;

use App\Models\News;
use Livewire\Component;

class Footer extends Component
{
    public $latest_news;

    public function mount(){
        $this->latest_news = News::latest()->get()->take(3);
    }
    public function render()
    {
        return view('livewire.client.home.footer');
    }
}
