<?php

namespace App\Http\Livewire\Admin\Media\VideoGallery;

use App\Models\Video;
use Livewire\Component;

class CreateVideo extends Component
{
    public $description;

    public $si_description;

    public $ta_description;

    public $link;

    public $company;

    public function save()
    {
        $this->validate([ // 1MB Max
            'description' => 'required',
            'si_description' => 'required',
            'ta_description' => 'required',
            'link' => 'required',
            'company' => 'required',
        ]);

        $video = Video::create([
            'description' => $this->description,
            'si_description' => $this->si_description,
            'ta_description' => $this->ta_description,
            'company' => $this->company,
            'link' => $this->link,
            'published' => false,
            'added_by' => auth()->user()->id,
        ]);

        $this->description = '';
        $this->si_description = '';
        $this->ta_description = '';
        $this->link = '';
        $this->company = '';

        session()->flash('message', 'Video successfully inserted.');

        //  return redirect()->route('videos.index');
    }

    public function render()
    {
        return view('livewire.admin.media.video-gallery.create-video');
    }
}
