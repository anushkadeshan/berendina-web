<?php

namespace App\Http\Livewire\Admin\Press;

use App\Models\Media;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;

class CreateMedia extends Component
{
    use WithFileUploads;


    public $description;
    public $si_description;
    public $ta_description;
    public $photo;

    public function save()
    {
        $this->validate([
            'description' => 'required',
            'si_description' => 'required',
            'ta_description' => 'required',
        ]);

        if(!empty($this->photo)){
            $imageHashName = $this->photo->hashName();

            $news = Media::create([
                'description' => $this->description,
                'si_description' => $this->si_description,
                'ta_description' => $this->ta_description,
                'image' => $imageHashName,
                'added_by' => auth()->user()->id
            ]);
            $i = $this->photo->store('public/photos/media/featured');
         }



         $path1 = storage_path().'/app/public/photos/media/thumb_medium/';



         $manager = new ImageManager();
         $image2 = $manager->make(storage_path().'/app/public/photos/media/featured/'.$imageHashName)->resize(330,225);

         $image2->save($path1.'/'.$imageHashName);

         session()->flash('message', 'Media successfully inserted.');

         $this->description = '';
         $this->si_description = '';
         $this->ta_description = '';
         $this->photo = '';


    }

    public function render()
    {
        return view('livewire.admin.press.create-media');
    }
}
