<?php

namespace App\Http\Livewire\Client\Bds;

use App\Models\Casestudy;
use Livewire\Component;

class CaseStudySingle extends Component
{
    protected $listeners = ['ShareId' => 'openId'];

    public $case_study = [];

    public function mount()
    {
        $this->openId(session('case_id'));
    }

    public function openId($id)
    {
        $this->case_study = Casestudy::find($id)->toArray();
    }

    public function render()
    {
        return view('livewire.client.bds.case-study-single');
    }
}
