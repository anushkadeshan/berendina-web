<?php

namespace App\Http\Livewire\Client\Press;

use App\Models\Media;
use Livewire\Component;

class InMedia extends Component
{
    public $media;

    public $count = 1;

    public function mount()
    {
        $this->media = Media::get()->take($this->count);
    }

    public function readmore()
    {
        $this->count = $this->count + 1;
        $this->mount();
    }

    public function render()
    {
        return view('livewire.client.press.in-media');
    }
}
