<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Carbon\Carbon;
use Livewire\Component;
use Spatie\Analytics\Period;
use Spatie\Analytics\AnalyticsFacade as Analytics; //Change here

class TopReferrers extends Component
{
    public $topReferrers,$period;
    public function mount(){
        if(session('data_period') !=''){
            $period =session('data_period');
        }
        else{
            $period = 7;
        }
        $this->period = $period;
        $this->topReferrers = Analytics::fetchTopReferrers(Period::days($this->period));
        //dd($this->topReferrers);
    }
    public function render()
    {
        return view('livewire.admin.dashboard.top-referrers');
    }
}
