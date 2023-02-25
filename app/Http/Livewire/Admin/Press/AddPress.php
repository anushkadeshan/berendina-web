<?php

namespace App\Http\Livewire\Admin\Press;

use App\Models\admin\PressRelease;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddPress extends Component
{
    use WithFileUploads;

    public $title;

    public $si_title;

    public $ta_title;

    public $published_date;

    public $company;

    public $photo;

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
            'title' => 'required',
            'si_title' => 'required',
            'ta_title' => 'required',
            'published_date' => 'required',
            'company' => 'required',
        ]);

        if (! empty($this->photo)) {
            $imageHashName = $this->photo->hashName();
            $news = PressRelease::create([
                'title' => $this->title,
                'sn_title' => $this->si_title,
                'ta_title' => $this->ta_title,
                'company' => $this->company,
                'published_date' => $this->published_date,
                'photo' => $imageHashName,
                'isPublished' => false,
                'added_by' => auth()->user()->id,
            ]);
            $i = $this->photo->store('public/photos/press-releases/featured');
        }

        $path1 = storage_path().'/app/public/photos/press-releases/thumb/';

        $manager = new ImageManager();

        $image1 = $manager->make(storage_path().'/app/public/photos/press-releases/featured/'.$imageHashName)->resize(330, 225, function ($constraint) {
            $constraint->aspectRatio();
        });

        $image1->save($path1.'/'.$imageHashName);

        session()->flash('message', 'Press Release successfully inserted.');

        $this->title = '';
        $this->sn_title = '';
        $this->ta_title = '';
        $this->published_date = '';
        $this->company = '';
        $this->photo = '';
    }

    public function render()
    {
        return view('livewire.admin.press.add-press');
    }
}
