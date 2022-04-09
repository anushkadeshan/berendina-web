<?php

namespace App\Http\Livewire\Client\Bmic\WhoWeAre;

use Livewire\Component;
use App\Models\Admin\Management as Profile;

class Management extends Component
{
    public $profiles = [];

    public function mount(){
        $profiles = Profile::where('company','BMIC')->where('is_published',true)->orderBy('order_id','asc')->get();
        $this->profiles = $profiles;
    }

    public function render()
    {
        return view('livewire.client.bmic.who-we-are.management');
    }
}
 