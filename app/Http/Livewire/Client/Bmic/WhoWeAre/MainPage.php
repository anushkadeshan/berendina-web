<?php

namespace App\Http\Livewire\Client\Bmic\WhoWeAre;

use Livewire\Component;

class MainPage extends Component
{
    public $about_us = false;

    public $history = true;

    public $values = false;

    public $board = false;

    public $management = false;

    public $footprints = false;

    public $partners = false;

    public function loadAboutUs()
    {
        $this->about_us = true;
        $this->history = false;
        $this->history = false;
        $this->management = false;
        $this->footprints = false;
        $this->partners = false;
        $this->board = false;
    }

    public function loadHistory()
    {
        $this->history = true;
        $this->about_us = false;
        $this->history = false;
        $this->management = false;
        $this->footprints = false;
        $this->partners = false;
        $this->board = false;
    }

    public function loadValues()
    {
        $this->values = true;
        $this->about_us = false;
        $this->history = false;
        $this->management = false;
        $this->footprints = false;
        $this->partners = false;
        $this->board = false;
    }

    public function loadBoard()
    {
        $this->board = true;
        $this->about_us = false;
        $this->history = false;
        $this->management = false;
        $this->footprints = false;
        $this->partners = false;
        $this->values = false;
    }

    public function loadManagement()
    {
        $this->management = true;
        $this->board = false;
        $this->about_us = false;
        $this->history = false;
        $this->footprints = false;
        $this->partners = false;
        $this->values = false;
    }

    public function loadFootprints()
    {
        $this->footprints = true;
        $this->management = false;
        $this->board = false;
        $this->about_us = false;
        $this->history = false;
        $this->partners = false;
        $this->values = false;
    }

    public function loadPartners()
    {
        $this->partners = true;
        $this->footprints = false;
        $this->management = false;
        $this->board = false;
        $this->about_us = false;
        $this->history = false;
        $this->values = false;
    }

    public function render()
    {
        return view('livewire.client.bmic.who-we-are.main-page');
    }
}
