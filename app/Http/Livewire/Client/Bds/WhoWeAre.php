<?php

namespace App\Http\Livewire\Client\Bds;

use Livewire\Component;

class WhoWeAre extends Component
{
    public $about_us = true;
    public $history = false;
    public $doners = false;
    public $board = false;
    public $management = false;
    public $org = false;
    public $partners = false;
    public $financial = false;

    public function loadAboutUs(){
        $this->about_us = true;
        $this->history = false;
        $this->doners = false;
        $this->board = false;
        $this->management = false;
        $this->org = false;
        $this->partners = false;
        $this->financial = false;
    }

    public function loadHistory(){
        $this->about_us = false;
        $this->history = true;
        $this->doners = false;
        $this->board = false;
        $this->management = false;
        $this->org = false;
        $this->partners = false;
        $this->financial = false;
    }

    public function loadDonors(){
        $this->about_us = false;
        $this->history = false;
        $this->doners = true;
        $this->board = false;
        $this->management = false;
        $this->org = false;
        $this->partners = false;
        $this->financial = false;
    }

    public function loadBoard(){
        $this->about_us = false;
        $this->history = false;
        $this->doners = false;
        $this->board = true;
        $this->management = false;
        $this->org = false;
        $this->partners = false;
        $this->financial = false;
    }

    public function loadManagement(){
        $this->about_us = false;
        $this->history = false;
        $this->doners = false;
        $this->board = false;
        $this->management = true;
        $this->org = false;
        $this->partners = false;
        $this->financial = false;
    }

    public function loadOrg(){
        $this->about_us = false;
        $this->history = false;
        $this->doners = false;
        $this->board = false;
        $this->management = false;
        $this->org = true;
        $this->partners = false;
        $this->financial = false;
    }

    public function loadPartners(){
        $this->about_us = false;
        $this->history = false;
        $this->doners = false;
        $this->board = false;
        $this->management = false;
        $this->org = false;
        $this->partners = true;
        $this->financial = false;
    }

    public function loadFinancial(){
        $this->about_us = false;
        $this->history = false;
        $this->doners = false;
        $this->board = false;
        $this->management = false;
        $this->org = false;
        $this->partners = false;
        $this->financial = true;
    }

    public function render()
    {
        return view('livewire.client.bds.who-we-are');
    }
}
