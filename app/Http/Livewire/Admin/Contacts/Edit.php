<?php

namespace App\Http\Livewire\Admin\Contacts;

use App\Models\BranchContact;
use Livewire\Component;

class Edit extends Component
{
    public $district;
    public $company;
    public $branch_name;
    public $address;
    public $telephone;
    public $lat;
    public $lng;
    public $contact_id;

    public function mount($id){
        $contact = BranchContact::find($id);
        $this->district = $contact->district;
        $this->company = $contact->company;
        $this->branch_name = $contact->branch_name;
        $this->address = $contact->address;
        $this->telephone = $contact->telephone;
        $this->lat = $contact->lat;
        $this->lng = $contact->lng;
        $this->contact_id = $contact->id;
    }

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

        BranchContact::updateOrCreate(['id'=> $this->contact_id],[
            'district' => $this->district,
            'company' => $this->company,
            'branch_name' => $this->branch_name,
            'address' => $this->address,
            'telephone' => $this->telephone,
            'lat' => $this->lat,
            'lng' => $this->lng,
        ]);

        session()->flash('message', 'Contact Details successfully updated.');
        return redirect()->to('admin/contacts');
    }

    public function render()
    {
        return view('livewire.admin.contacts.edit');
    }
}
