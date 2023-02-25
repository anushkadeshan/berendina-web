<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Livewire\Component;
use Spatie\Analytics\AnalyticsFacade as Analytics;
use Spatie\Analytics\Period; //Change here

class UserTypes extends Component
{
    public $new;

    public $req;

    public $period;

    public function mount()
    {
        if (session('data_period') != '') {
            $period = session('data_period');
        } else {
            $period = 7;
        }
        $this->period = $period;
        $userTypes = Analytics::fetchUserTypes(Period::days($this->period));
        $this->new = $userTypes[0]['sessions'];
        $this->req = $userTypes[1]['sessions'];
    }

    public function render()
    {
        return view('livewire.admin.dashboard.user-types');
    }
}
