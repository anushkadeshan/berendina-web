<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Carbon\Carbon;
use Livewire\Component;
use Spatie\Analytics\Period;
use Spatie\Analytics\AnalyticsFacade as Analytics; //Change here

class UserTypes extends Component
{
    public $new, $req,$period;
    public function mount(){
        if(session('data_period') !=''){
            $period =session('data_period');
        }
        else{
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
