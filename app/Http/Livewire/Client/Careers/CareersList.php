<?php

namespace App\Http\Livewire\Client\Careers;

use App\Models\admin\Career;
use Livewire\Component;

class CareersList extends Component
{
    public $careers = [];

    public function mount()
    {
        $careers = Career::where('is_published', true)->orderBy('closing_date', 'DESC')->get();
        $this->careers = $careers;
    }

    public function render()
    {
        return view('livewire.client.careers.careers-list');
    }
}
