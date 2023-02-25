<?php

namespace App\Http\Livewire\Admin\Media\VideoGallery;

use App\Models\Video;
use Livewire\Component;

class EditVideo extends Component
{
    public $description;

    public $si_description;

    public $ta_description;

    public $link;

    public $company;

    public $video_id;

    public $active;

    public function mount($video)
    {
        $this->description = $video->description;
        $this->si_description = $video->si_description;
        $this->ta_description = $video->ta_description;
        $this->link = $video->link;
        $this->company = $video->company;
        $this->video_id = $video->id;
        $this->active = $video->published;
    }

    public function save()
    {
        $this->validate([ // 1MB Max
            'description' => 'required',
            'si_description' => 'required',
            'ta_description' => 'required',
            'link' => 'required',
            'company' => 'required',
        ]);

        $video = Video::find($this->video_id);
        $video->description = $this->description;
        $video->si_description = $this->si_description;
        $video->ta_description = $this->ta_description;
        $video->link = $this->link;
        $video->company = $this->company;
        $video->save();

        session()->flash('message', 'Video successfully updated.');

        // return redirect()->route('videos.index');
    }

    public function isPublished()
    {
        $case = Video::find($this->video_id);

        $case->published = $case->published ? false : true;
        $case->save();
        $this->mount($case);
    }

    public function render()
    {
        return view('livewire.admin.media.video-gallery.edit-video');
    }
}
