<?php

namespace App\Http\Livewire\Admin\Management;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Admin\Management;

class Create extends Component
{
    use WithFileUploads;
    
    public $name; 
    public $display_name; 
    public $designation; 
    public $profile; 
    public $photo; 
    public $company; 
    public $is_published; 
    public $order_id; 

    public function save(){
        $this->validate([
            'photo' => 'image|max:1024|required', // 1MB Max
            'name' => 'required',
            'display_name' => 'required',
            'company' => 'required',
            'designation' => 'required'
        ]);
        if(!empty($this->photo)){
            $imageHashName = $this->photo->hashName();
            $order_id = Management::max('id')+1;
            //dd($order_id);
            $report = Management::create([
                'name' => $this->name,
                'display_name' => $this->display_name,
                'company' => $this->company,
                'isPublished' => false,
                'photo' => $imageHashName,
                'designation' => $this->designation,
                'profile' => $this->profile,
                'order_id' => $order_id,
            ]);

            $this->photo->store('public/photos/management');

            session()->flash('message', 'Team Member successfully inserted.');

            $this->name = ''; 
            $this->display_name = ''; 
            $this->designation = ''; 
            $this->profile = ''; 
            $this->photo = ''; 
            $this->company = ''; 
            $this->is_published = ''; 

         }
    }
    
    public function render()
    {
        return view('livewire.admin.management.create');
    }
}
