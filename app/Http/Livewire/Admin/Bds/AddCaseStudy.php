<?php

namespace App\Http\Livewire\Admin\Bds;

use App\Models\Casestudy;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddCaseStudy extends Component
{
    use WithFileUploads;

    public $title;

    public $sn_title;

    public $ta_title;

    public $description;

    public $si_description;

    public $ta_description;

    public $category;

    public $photo;

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

            $casesyudy = Casestudy::create([
                'title' => $this->title,
                'si_title' => $this->sn_title,
                'ta_title' => $this->ta_title,
                'description' => $this->description,
                'si_description' => $this->si_description,
                'ta_description' => $this->ta_description,
                'category' => $this->category,
                'image' => $imageHashName,
                'added_by' => auth()->user()->id,
            ]);
            $i = $this->photo->store('public/photos/bds/featured');
        }

        $path1 = storage_path().'/app/public/photos/bds/thumb_medium';
        $path2 = storage_path().'/app/public/photos/bds/thumb_small';

        $manager = new ImageManager();
        $image = $manager->make(storage_path().'/app/public/photos/bds/featured/'.$imageHashName)->resize(80, 55);
        $image2 = $manager->make(storage_path().'/app/public/photos/bds/featured/'.$imageHashName)->resize(330, 225);

        $image2->save($path1.'/'.$imageHashName);
        $image->save($path2.'/'.$imageHashName);

        session()->flash('message', 'Case Study successfully inserted.');

        $this->title = '';
        $this->sn_title = '';
        $this->ta_title = '';
        $this->description = '';
        $this->si_description = '';
        $this->ta_description = '';
        $this->category = '';
        $this->photo = '';
    }

    public function render()
    {
        return view('livewire.admin.bds.add-case-study');
    }
}
