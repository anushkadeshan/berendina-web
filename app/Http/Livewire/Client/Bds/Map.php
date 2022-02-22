<?php

namespace App\Http\Livewire\Client\Bds;

use Livewire\Component;

class Map extends Component
{
    public $kandy = '';

    public function kandy($name){
        dd($name);
    }
    public function render()
    {
        return view('livewire.client.bds.map');
    }
}
