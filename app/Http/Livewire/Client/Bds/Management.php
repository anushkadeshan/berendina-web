<?php

namespace App\Http\Livewire\Client\Bds;

use Livewire\Component;
use App\Models\Admin\Management as Profile;

class Management extends Component
{
    public $profiles = [];
    public function mount(){
        $profiles = Profile::where('company','BDS')->where('is_published',true)->orderBy('order_id','asc')->get();
        $this->profiles = $profiles;
    }
    public function render()
    {
        return view('livewire.client.bds.management');
    }
}
