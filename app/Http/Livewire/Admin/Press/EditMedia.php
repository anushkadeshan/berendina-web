<?php

namespace App\Http\Livewire\Admin\Press;

use App\Models\Media;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditMedia extends Component
{
    use WithFileUploads;

    public $news_categories;

    public $media_id;

    public $description;

    public $si_description;

    public $ta_description;

    public $photo;

    public $image;

    public function mount($id)
    {
        if ($id) {
            $media = Media::find($id);
            $this->media_id = $media->id;
            $this->description = $media->description;
            $this->si_description = $media->si_description;
            $this->ta_description = $media->ta_description;
            $this->image = $media->image;
        }
    }

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024',
            'description' => 'required',
            'si_description' => 'required',
            'ta_description' => 'required',
        ]);

        if (! empty($this->photo)) {
            $imageHashName = $this->photo->hashName();
            $i = $this->photo->store('public/photos/media/featured');
            $path1 = storage_path().'/app/public/photos/media/thumb_medium/';

            $manager = new ImageManager();
            $image2 = $manager->make(storage_path().'/app/public/photos/media/featured/'.$imageHashName)->resize(330, 225);

            $image2->save($path1.'/'.$imageHashName);
        }

        $media = Media::find($this->media_id);
        $media->description = $this->description;
        $media->si_description = $this->si_description;
        $media->ta_description = $this->ta_description;
        if (! empty($this->photo)) {
            $media->image = $imageHashName;
        }
        $media->added_by = auth()->user()->id;
        $media->save();

        session()->flash('message', 'Media successfully updated.');

        $this->description = '';
        $this->si_description = '';
        $this->ta_description = '';
        $this->photo = '';

        $this->mount($this->media_id);
    }

    public function render()
    {
        return view('livewire.admin.press.edit-media');
    }
}
