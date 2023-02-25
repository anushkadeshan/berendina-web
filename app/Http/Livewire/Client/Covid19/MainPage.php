<?php

namespace App\Http\Livewire\Client\Covid19;

use Livewire\Component;

class MainPage extends Component
{
    public $background = true;

    public function render()
    {
        return view('livewire.client.covid19.main-page');
    }
}
