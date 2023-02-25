<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Livewire\Component;
use Spatie\Analytics\AnalyticsFacade as Analytics;
use Spatie\Analytics\Period; //Change here

class PageViews extends Component
{
    public $dates;

    public $visitors;

    public $pageViews;

    public $period = 7;

    public function mount()
    {
        //session(['data_period' => 7]);
        if (session('data_period') != '') {
            $period = session('data_period');
        } else {
            $period = 7;
        }
        $this->period = $period;
        $this->vistorsAndViews();
    }

    public function changePeriod($days)
    {
        session(['data_period' => $days]);

        return redirect()->to('admin/dashboard');
    }

    public function vistorsAndViews()
    {
        //dd(session('data_period'));

        $analyticsData = Analytics::fetchTotalVisitorsAndPageViews(Period::days($this->period));
        $datesCarbon = $analyticsData->pluck('date')->toArray();
        $dates = [];
        foreach ($datesCarbon as $key => $value) {
            $dates[] = $value->format('Y-m-d');
        }
        $this->dates = $dates;
        $this->visitors = $analyticsData->pluck('visitors')->toArray();
        $this->pageViews = $analyticsData->pluck('pageViews')->toArray();

        //dd($this->dates,$this->pageViews,$this->visitors);
    }

    public function render()
    {
        return view('livewire.admin.dashboard.page-views');
    }
}
