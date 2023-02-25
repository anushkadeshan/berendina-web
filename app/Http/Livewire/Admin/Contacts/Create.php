<?php

namespace App\Http\Livewire\Admin\Contacts;

use App\Models\BranchContact;
use Livewire\Component;

class Create extends Component
{
    public $district;
    public $company;
    public $branch_name;
    public $address;
    public $telephone;
    public $lat;
    public $lng;

    public function save(){
        $this->validate([
            'district' => 'required',
            'company' => 'required',
            'branch_name' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'lat' => 'required',
            'lng' => 'required',
        ]);

        BranchContact::create([
            'district' => $this->district,
            'company' => $this->company,
            'branch_name' => $this->branch_name,
            'address' => $this->address,
            'telephone' => $this->telephone,
            'lat' => $this->lat,
            'lng' => $this->lng,
        ]);

        session()->flash('message', 'Contact Details successfully inserted.');
        $this->district = '';
        $this->company = '';
        $this->branch_name = '';
        $this->address = '';
        $this->telephone = '';
        $this->lat = '';
        $this->lng = '';


    }
    public function render()
    {
        return view('livewire.admin.contacts.create');
    }
}
