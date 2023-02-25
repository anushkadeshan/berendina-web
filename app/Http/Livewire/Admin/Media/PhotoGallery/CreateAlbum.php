<?php

namespace App\Http\Livewire\Admin\Media\PhotoGallery;

use App\Models\Album;
use App\Models\Photo;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateAlbum extends Component
{
    use WithFileUploads;

    public $title;

    public $sn_title;

    public $ta_title;

    public $company;

    public $thumb;

    public $photos;

    public function save()
    {
        $this->validate([ // 1MB Max
            'title' => 'required',
            'sn_title' => 'required',
            'ta_title' => 'required',
            'company' => 'required',
        ]);

        $thumbHashName = $this->thumb->hashName();
        if (! empty($this->photos)) {
            $album = Album::create([
                'title' => $this->title,
                'si_title' => $this->sn_title,
                'ta_title' => $this->ta_title,
                'company' => $this->company,
                'thumb' => $thumbHashName,
                'isPublished' => false,
                'added_by' => auth()->user()->id,
            ]);
            //$photos->categories()->sync($this->categories);
            $i = $this->thumb->store('public/photos/image-gallery/thumb');

            $path = storage_path().'/app/public/photos/image-gallery/thumb/';
            $manager = new ImageManager();
            foreach ($this->photos as $photo) {
                $imageHashName = $photo->hashName();
                $photo->store('public/photos/image-gallery/featured');
                $image = $manager->make(storage_path().'/app/public/photos/image-gallery/featured/'.$imageHashName)->resize(330, 225);
                $image->save($path.'/'.$imageHashName);

                Photo::create([
                    'album_id' => $album->id,
                    'file_name' => $imageHashName,
                ]);
            }
            session()->flash('message', 'Album successfully inserted.');

            return redirect()->route('photo-gallery.index');
        }
    }

    public function render()
    {
        return view('livewire.admin.media.photo-gallery.create-album');
    }
}
