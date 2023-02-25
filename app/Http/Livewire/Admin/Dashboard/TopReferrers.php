<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Livewire\Component;
use Spatie\Analytics\AnalyticsFacade as Analytics;
use Spatie\Analytics\Period; //Change here

class TopReferrers extends Component
{
    public $topReferrers;

    public $period;

    public function mount()
    {
        if (session('data_period') != '') {
            $period = session('data_period');
        } else {
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
