<?php

namespace App\Http\Livewire\Client\Media;

use App\Models\Album;
use Livewire\Component;

class PhotoGallery extends Component
{
    public $albums =[];

    public function mount(){
        $this->albums = Album::where('isPublished', true)->get();
    }
    public function render()
    {
        return view('livewire.client.media.photo-gallery');
    }
}
