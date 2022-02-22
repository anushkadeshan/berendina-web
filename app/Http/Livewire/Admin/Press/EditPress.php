<?php

namespace App\Http\Livewire\Admin\Press;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\admin\PressRelease;
use Intervention\Image\ImageManager;

class EditPress extends Component
{

    use WithFileUploads;
    public $title;
    public $si_title;
    public $ta_title;
    public $published_date;
    public $company;
    public $photo_thumb;
    public $photo;
    public $active;
    public $press_id;

    public function mount($press){
        $this->title = $press->title;
        $this->si_title = $press->sn_title;
        $this->ta_title = $press->ta_title;
        $this->published_date = $press->published_date;
        $this->company = $press->company;
        $this->photo_thumb = $press->photo;
        $this->active = $press->isPublished;
        $this->press_id = $press->id;
    }
    public function isPublished(){
        $case = PressRelease::find($this->press_id);
        $case->isPublished = $case->isPublished ? false : true;
        $case->save();
        $this->mount($case);
    }

    public function save(){
        $report = PressRelease::find($this->press_id);
        $report->title = $this->title;
        $report->sn_title = $this->si_title;
        $report->ta_title = $this->ta_title;
        $report->published_date = $this->published_date;
        $report->company = $this->company;
        $report->save();

        if(!empty($this->photo)){
            $imageHashName = $this->photo->hashName();
            $this->photo->store('public/photos/press-releases/featured');
            $report->photo = $imageHashName;
            $report->save();

            $path1 = storage_path().'/app/public/photos/press-releases/thumb/';

            $manager = new ImageManager();

            $image1 = $manager->make(storage_path().'/app/public/photos/press-releases/featured/'.$imageHashName)->resize(330,225,function ($constraint) {
                $constraint->aspectRatio();
            });

            $image1->save($path1.'/'.$imageHashName);

            }

         session()->flash('message', 'Press Release successfully updated.');

         return redirect()->route('press-release.index');
    }

    public function render()
    {
        return view('livewire.admin.press.edit-press');
    }
}
