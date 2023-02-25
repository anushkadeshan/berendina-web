<?php

namespace App\Http\Livewire\Client\Media;

use Livewire\Component;

class PhotoGallerySingle extends Component
{
    public $photos = [];

    public function mount($photos)
    {
        $this->photos = $photos;
    }

    public function render()
    {
        return view('livewire.client.media.photo-gallery-single');
    }
}
