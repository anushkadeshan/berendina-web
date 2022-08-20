<?php

namespace App\Http\Livewire\Client\Bmic\Media;

use App\Models\Video;
use Livewire\Component;

class VideoGallery extends Component
{
    public $videos = [];
    public $count = 6;

    public function mount(){
        $this->videos = Video::where('published',true)->where('company','BMIC')->get()->take($this->count);
    }

    public function readmore(){
        $this->count = $this->count+3;
        $this->mount();
    }
    
    public function render()
    {
        return view('livewire.client.bmic.media.video-gallery');
    }
}
