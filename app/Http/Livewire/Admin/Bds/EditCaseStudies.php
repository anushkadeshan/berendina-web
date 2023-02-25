<?php

namespace App\Http\Livewire\Admin\Bds;

use App\Models\Casestudy;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCaseStudies extends Component
{
    use WithFileUploads;

    public $news_categories;

    public $case_id;

    public $title;

    public $sn_title;

    public $ta_title;

    public $description;

    public $si_description;

    public $ta_description;

    public $category;

    public $photo;

    public $image;

    public $active;

    public function mount($id)
    {
        if ($id) {
            $case = Casestudy::find($id);
            $this->case_id = $case->id;
            $this->title = $case->title;
            $this->sn_title = $case->si_title;
            $this->ta_title = $case->ta_title;
            $this->description = $case->description;
            $this->si_description = $case->si_description;
            $this->ta_description = $case->ta_description;
            $this->image = $case->image;
            $this->category = $case->category;
            $this->active = $case->active;
        }
    }

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
            'title' => 'required',
            'sn_title' => 'required',
            'ta_title' => 'required',
            'description' => 'required',
            'si_description' => 'required',
            'ta_description' => 'required',
            'category' => 'required',
        ]);

        if (! empty($this->photo)) {
            $imageHashName = $this->photo->hashName();
            $i = $this->photo->store('public/photos/bds/featured');
            $path1 = storage_path().'/app/public/photos/bds/thumb_medium/';
            $path2 = storage_path().'/app/public/photos/bds/thumb_small/';

            $manager = new ImageManager();
            $image = $manager->make(storage_path().'/app/public/photos/bds/featured/'.$imageHashName)->resize(80, 55);
            $image2 = $manager->make(storage_path().'/app/public/photos/bds/featured/'.$imageHashName)->resize(330, 225);

            $image2->save($path1.'/'.$imageHashName);
            $image->save($path2.'/'.$imageHashName);
        }

        $case = Casestudy::find($this->case_id);
        $case->title = $this->title;
        $case->si_title = $this->sn_title;
        $case->ta_title = $this->ta_title;
        $case->description = $this->description;
        $case->si_description = $this->si_description;
        $case->ta_description = $this->ta_description;
        $case->category = $this->category;
        if (! empty($this->photo)) {
            $case->image = $imageHashName;
        }
        $case->added_by = auth()->user()->id;
        $case->save();

        session()->flash('message', 'Case Study successfully updated.');

        $this->title = '';
        $this->sn_title = '';
        $this->ta_title = '';
        $this->description = '';
        $this->si_description = '';
        $this->ta_description = '';
        $this->category = '';
        $this->photo = '';
    }

    public function isPublished()
    {
        $case = Casestudy::find($this->case_id);
        //dd($case);
        $case->active = $case->active ? false : true;
        $case->save();
        $this->mount($this->case_id);
    }

    public function render()
    {
        return view('livewire.admin.bds.edit-case-studies');
    }
}
