<?php

namespace App\Http\Livewire\Client\Bds;

use App\Models\admin\PressRelease;
use Livewire\Component;

class PressReleases extends Component
{
    public $press_releases = [];

    public $count = 3;

    public $cases;

    public function readmore()
    {
        $this->count = $this->count + 3;
        $this->mount();
    }

    public function mount()
    {
        $this->press_releases = PressRelease::latest()->where('company', 'BDS')->where('isPublished', true)->get()->take($this->count);
    }

    public function render()
    {
        return view('livewire.client.bds.press-releases');
    }
}
