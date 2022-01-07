<?php

namespace App\Http\Livewire\Admin\Media\PhotoGallery;

use App\Models\Album;
use App\Models\Photo;
use Livewire\Component;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;


class EditAlbum extends Component
{
    use WithFileUploads;
    public $title;
    public $sn_title;
    public $ta_title;
    public $company;
    public $thumb;
    public $photos;
    public $album_id;
    public $active;
    //database
    public $all_photos;
    public $thumb_cover;

    public function mount($album) {
        $this->title = $album->title;
        $this->sn_title = $album->si_title;
        $this->ta_title = $album->ta_title;
        $this->company = $album->company;
        $this->thumb_cover = $album->thumb;
        $this->all_photos = $album->photos;
        $this->album_id = $album->id;
        $this->active = $album->isPublished;
    }

    public function deletePhoto($id,$file){
        if(Storage::disk('public')->exists('photos/image-gallery/thumb/'.$file)){
            try{
                Storage::disk('public')->delete('photos/image-gallery/thumb/'.$file);
                Storage::disk('public')->delete('photos/image-gallery/featured/'.$file);
                Photo::where('id', $id)->delete();

                $album = Album::find($this->album_id);
                $this->mount($album);
            }
            catch(\Exception $e){
                dd($e);
            }

        }else{
            dd('File does not exists.');
        }
    }

    public function isPublished(){
        $case = Album::find($this->album_id);

        $case->isPublished = $case->isPublished ? false : true;
        $case->save();
        $this->mount($case);
    }

    public function save()
    {
        $this->validate([ // 1MB Max
            'title' => 'required',
            'sn_title' => 'required',
            'ta_title' => 'required',
            'company' => 'required',
        ]);
        $album = Album::find($this->album_id);
            $album->title = $this->title;
            $album->si_title = $this->sn_title;
            $album->ta_title = $this->ta_title;
            $album->company = $this->company;
            $album->save();

        if(!empty($this->thumb)){
            Storage::disk('public')->delete('photos/image-gallery/thumb/'.$album->thumb);
            $thumbHashName = $this->thumb->hashName();
            $album->thumb = $thumbHashName;
            $album->save();

            $this->thumb->store('public/photos/image-gallery/thumb');
        }

        if(!empty($this->photos)){
            $path=  storage_path().'/app/public/photos/image-gallery/thumb/';
            $manager = new ImageManager();
            foreach ($this->photos as $photo) {
                $imageHashName = $photo->hashName();
                $photo->store('public/photos/image-gallery/featured');
                $image = $manager->make(storage_path().'/app/public/photos/image-gallery/featured/'.$imageHashName)->resize(330,225);
                $image->save($path.'/'.$imageHashName);
                Photo::create([
                    'album_id' => $album->id,
                    'file_name' => $imageHashName
                ]);
            }
         }

         session()->flash('message', 'Album successfully Updated.');

        return redirect()->route('photo-gallery.index');

    }
    public function render()
    {
        return view('livewire.admin.media.photo-gallery.edit-album');
    }
}
