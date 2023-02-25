<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Livewire\Component;
use Spatie\Analytics\AnalyticsFacade as Analytics;
use Spatie\Analytics\Period;

class MostVisitedPages extends Component
{
    public $mostVisitedPages;

    public $period;

    public function mount()
    {
        if (session('data_period') != '') {
            $period = session('data_period');
        } else {
            $period = 7;
        }
        $this->period = $period;
        $this->fetchMostVisitedPages();
    }

    public function fetchMostVisitedPages()
    {
        $this->mostVisitedPages = Analytics::fetchMostVisitedPages(Period::days($this->period), 20);
        //dd(Analytics::getAnalyticsService());
    }

    public function render()
    {
        return view('livewire.admin.dashboard.most-visited-pages');
    }
}
