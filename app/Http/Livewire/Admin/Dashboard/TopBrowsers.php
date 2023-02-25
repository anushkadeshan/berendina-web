<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Livewire\Component;
use Spatie\Analytics\AnalyticsFacade as Analytics;
use Spatie\Analytics\Period; //Change here

class TopBrowsers extends Component
{
    public $topBrowsers;

    public function mount()
    {
        if (session('data_period') != '') {
            $period = session('data_period');
        } else {
            $period = 7;
        }
        $this->period = $period;
        $this->topBrowsers = Analytics::fetchTopBrowsers(Period::days($this->period));
    }

    public function render()
    {
        return view('livewire.admin.dashboard.top-browsers');
    }
}
