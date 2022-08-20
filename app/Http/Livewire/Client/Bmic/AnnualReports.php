<?php

namespace App\Http\Livewire\Client\Bmic;

use Livewire\Component;
use App\Models\AnnualReport;

class AnnualReports extends Component
{

    public $annual_reports;

    public function mount(){
        $this->annual_reports = AnnualReport::where('company','BMIC')->where('isPublished', true)->get();
    }

    public function render()
    {
        return view('livewire.client.bmic.annual-reports');
    }
}
