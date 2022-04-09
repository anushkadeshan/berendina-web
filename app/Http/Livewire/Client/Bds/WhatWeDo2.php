<?php

namespace App\Http\Livewire\Client\Bds;

use Livewire\Component;

class WhatWeDo2 extends Component
{
    public $key = false;
    public $disaster = false;
    public $gender = true;
    public $envirnment = false;
    public $disability = false;
    public $youth = false;
    public $meal = false;

    public function loadKey(){
        $this->key = true;
        $this->disaster = false;
        $this->gender = false;
        $this->envirnment = false;
        $this->disability = false;
        $this->youth = false;
        $this->meal = false;
    }

    public function loadDisaster(){
        $this->key = false;
        $this->disaster = true;
        $this->gender = false;
        $this->envirnment = false;
        $this->disability = false;
        $this->youth = false;
        $this->meal = false;
    }
    public function loadGender(){
        $this->key = false;
        $this->disaster = false;
        $this->gender = true;
        $this->envirnment = false;
        $this->disability = false;
        $this->youth = false;
        $this->meal = false;
    }

    public function LoadDisability(){
        $this->key = false;
        $this->disaster = false;
        $this->gender = false;
        $this->envirnment = false;
        $this->disability = true;
        $this->youth = false;
        $this->meal = false;
    }

    public function LoadEnvirnment(){
        $this->key = false;
        $this->disaster = false;
        $this->gender = false;
        $this->envirnment = true;
        $this->disability = false;
        $this->youth = false;
        $this->meal = false;
    }

    public function LoadYouth(){
        $this->key = false;
        $this->disaster = false;
        $this->gender = false;
        $this->envirnment = false;
        $this->disability = false;
        $this->youth = true;
        $this->meal = false;
    }

    public function LoadMeal(){
        $this->key = false;
        $this->disaster = false;
        $this->gender = false;
        $this->envirnment = false;
        $this->disability = false;
        $this->youth = false;
        $this->meal = true;
    }
    
    public function render()
    { 
        return view('livewire.client.bds.what-we-do2');
    }
}
