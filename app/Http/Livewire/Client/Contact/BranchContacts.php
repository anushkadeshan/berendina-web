<?php

namespace App\Http\Livewire\Client\Contact;

use Livewire\Component;
use App\Models\BranchContact;

class BranchContacts extends Component
{
    public $bmicBranches = [];
    public $bdsBranches = [];

    public function mount(){
        $this->bmicBranches = BranchContact::where('company','BMIC')->get();
        $this->bdsBranches = BranchContact::where('company','BDS')->get();
    }

    public function render()
    {
        return view('livewire.client.contact.branch-contacts');
    }
}
