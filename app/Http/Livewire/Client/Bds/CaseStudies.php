<?php

namespace App\Http\Livewire\Client\Bds;

use App\Models\Casestudy;
use Livewire\Component;

class CaseStudies extends Component
{
    public $count = 3;

    public $cases;

    public function mount()
    {
        $this->cases = Casestudy::latest()->where('category', 'BDS')->where('active', true)->get()->take($this->count);
    }

    public function readmore()
    {
        $this->count = $this->count + 3;
        $this->mount();
    }

    public function OpenReadView($id)
    {
        $this->emit('OpenCaseStudyFull', $id);
        $this->read_view = true;
    }

    public function render()
    {
        return view('livewire.client.bds.case-studies');
    }
}
