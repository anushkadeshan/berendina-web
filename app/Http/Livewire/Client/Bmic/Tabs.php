<?php

namespace App\Http\Livewire\Client\Bmic;

use Livewire\Component;

class Tabs extends Component
{
    public $milestone = false;

    public $vision = false;

    public $values = false;

    public $shareholders = false;

    public $board = false;

    public $services = false;

    public function mount()
    {
        $this->milestone = true;
    }

    public function milestone()
    {
        $this->vision = false;
        $this->values = false;
        $this->milestone = true;
        $this->shareholders = false;
        $this->services = false;
        $this->board = false;
    }

    public function vision()
    {
        $this->vision = true;
        $this->milestone = false;
        $this->values = false;
        $this->shareholders = false;
        $this->services = false;
        $this->board = false;
    }

    public function values()
    {
        $this->vision = false;
        $this->milestone = false;
        $this->values = true;
        $this->board = false;
        $this->services = false;
        $this->shareholders = false;
    }

    public function shareholders()
    {
        $this->vision = false;
        $this->milestone = false;
        $this->values = false;
        $this->shareholders = true;
        $this->services = false;
        $this->board = false;
    }

    public function board()
    {
        $this->vision = false;
        $this->milestone = false;
        $this->values = false;
        $this->shareholders = false;
        $this->services = false;
        $this->board = true;
    }

    public function services()
    {
        $this->vision = false;
        $this->milestone = false;
        $this->values = false;
        $this->shareholders = false;
        $this->board = false;
        $this->services = true;
    }

    public function render()
    {
        return view('livewire.client.bmic.tabs');
    }
}
