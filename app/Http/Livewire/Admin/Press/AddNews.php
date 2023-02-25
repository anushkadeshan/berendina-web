<?php

namespace App\Http\Livewire\Admin\Press;

use App\Models\admin\NewsCategory;
use App\Models\News;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddNews extends Component
{
    use WithFileUploads;

    public $news_categories;

    public $title;

    public $sn_title;

    public $ta_title;

    public $description;

    public $si_description;

    public $ta_description;

    public $categories = [];

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
            'categories' => 'required',
        ]);

        if (! empty($this->photo)) {
            $imageHashName = $this->photo->hashName();

            $news = News::create([
                'title' => $this->title,
                'si_title' => $this->sn_title,
                'ta_title' => $this->ta_title,
                'description' => $this->description,
                'si_description' => $this->si_description,
                'ta_description' => $this->ta_description,
                'categories' => json_encode($this->categories),
                'image' => $imageHashName,
                'added_by' => auth()->user()->id,
            ]);
            $news->categories()->sync($this->categories);
            $i = $this->photo->store('public/photos/news/featured');
        }

        $path1 = storage_path().'/app/public/photos/news/thumb_medium/';
        $path2 = storage_path().'/app/public/photos/news/thumb_small/';

        $manager = new ImageManager();
        $image = $manager->make(storage_path().'/app/public/photos/news/featured/'.$imageHashName)->resize(80, 55);
        $image2 = $manager->make(storage_path().'/app/public/photos/news/featured/'.$imageHashName)->resize(330, 225);

        $image2->save($path1.'/'.$imageHashName);
        $image->save($path2.'/'.$imageHashName);

        session()->flash('message', 'News successfully inserted.');

        $this->title = '';
        $this->sn_title = '';
        $this->ta_title = '';
        $this->description = '';
        $this->si_description = '';
        $this->ta_description = '';
        $this->categories = [];
        $this->photo = '';
    }

    public function mount()
    {
        $this->news_categories = NewsCategory::get();
    }

    public function render()
    {
        return view('livewire.admin.press.add-news');
    }
}
