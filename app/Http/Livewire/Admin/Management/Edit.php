<?php

namespace App\Http\Livewire\Admin\Management;

use App\Models\Admin\Management;
use Livewire\Component;

class Edit extends Component
{
    public $name;

    public $display_name;

    public $designation;

    public $profile;

    public $photo;

    public $company;

    public $is_published;

    public $order_id;

    public $active;

    public $profile_id;

    public $photo_url;

    public function mount($profile)
    {
        $this->name = $profile->name;
        $this->display_name = $profile->display_name;
        $this->designation = $profile->designation;
        $this->profile = $profile->profile;
        $this->photo_url = $profile->photo;
        $this->company = $profile->company;
        $this->is_published = $profile->is_published;
        $this->order_id = $profile->order_id;
        $this->active = $profile->is_published;
        $this->profile_id = $profile->id;
    }

    public function save()
    {
        $profile = Management::find($this->profile_id);
        $profile->name = $this->name;
        $profile->display_name = $this->display_name;
        $profile->designation = $this->designation;
        $profile->profile = $this->profile;
        $profile->company = $this->company;
        $profile->order_id = $this->order_id;
        $profile->save();

        if (! empty($this->photo)) {
            $imageHashName = $this->photo->hashName();
            $this->photo->store('public/photos/management');
            $profile->photo = $imageHashName;
            $profile->save();
        }
        session()->flash('message', 'Profile successfully updated.');

        return redirect()->route('management.index');
    }

    public function isPublished()
    {
        $profile = Management::find($this->profile_id);
        $profile->is_published = $profile->is_published ? false : true;
        $profile->save();
        $this->mount($profile);
    }

    public function render()
    {
        return view('livewire.admin.management.edit');
    }
}
