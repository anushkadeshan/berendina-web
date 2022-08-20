<?php

namespace App\Http\Livewire\Client\Bmic\Media;

use Livewire\Component;
use App\Models\Casestudy;

class CaseStudies extends Component
{
    public $count = 3;
    public $cases;

    public function mount(){
        $this->cases = Casestudy::latest()->where('category','BMIC')->where('active', true)->get()->take($this->count);
    }

    public function readmore(){
        $this->count = $this->count+3;
        $this->mount();
    }

    public function OpenReadView($id)
    {
        $this->emit('OpenCaseStudyFull', $id);
        $this->read_view = true;
    }

    public function render()
    {
        return view('livewire.client.bmic.media.case-studies');
    }
}
