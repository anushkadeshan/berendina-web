<?php

namespace App\Http\Livewire\Client\Press;

use App\Models\Video;
use Livewire\Component;

class Videos extends Component
{
    public $videos = [];

    public $count = 3;

    public function mount()
    {
        $this->videos = Video::where('published', true)->get()->take($this->count);
    }

    public function render()
    {
        return view('livewire.client.press.videos');
    }
}
