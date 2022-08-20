<?php

namespace App\Http\Livewire\Client\Bmic\Media;

use App\Models\Album;
use App\Models\Photo;
use Livewire\Component;

class PhotoGallery extends Component
{
    public $albums =[];
    public $album_view = true;
    public $album_photos = [];

    public function mount(){
        $this->albums = Album::where('company','BMIC')->where('isPublished', true)->get();
    }

    public function loadGallery($album_id){

        $this->emit('openGallery', $album_id);
        $this->album_photos = Photo::where('album_id',$album_id)->get();
        //$this->album_view = false;
        $this->mount();
    }
    
    public function render()
    {
        return view('livewire.client.bmic.media.photo-gallery');
    }
}
