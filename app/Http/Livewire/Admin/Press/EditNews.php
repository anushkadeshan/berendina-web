<?php

namespace App\Http\Livewire\Admin\Press;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\admin\NewsCategory;
use Intervention\Image\ImageManager;

class EditNews extends Component
{
    use WithFileUploads;
    public $news_categories;

    public $news_id;
    public $title;
    public $sn_title;
    public $ta_title;
    public $description;
    public $si_description;
    public $ta_description;
    public $categories = [];
    public $photo;
    public $image;
    public $published;

    public function mount($id){
        if($id){
            $news = News::find($id);
            $this->news_id = $news->id;
            $this->title = $news->title;
            $this->sn_title = $news->si_title;
            $this->ta_title = $news->ta_title;
            $this->description = $news->description;
            $this->si_description = $news->si_description;
            $this->ta_description = $news->ta_description;
            $this->image = $news->image;
            $this->published = $news->published;
            $this->categories = json_decode($news->categories);
        }

        $this->news_categories = NewsCategory::get();
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
            'categories' => 'required',
        ]);

        if(!empty($this->photo)){
            $imageHashName = $this->photo->hashName();
            $i = $this->photo->store('public/photos/news/featured');
            $path1 = storage_path().'/app/public/photos/news/thumb_medium/';
            $path2 = storage_path().'/app/public/photos/news/thumb_small/';

            $manager = new ImageManager();
            $image = $manager->make(storage_path().'/app/public/photos/news/featured/'.$imageHashName)->resize(80,55);
            $image2 = $manager->make(storage_path().'/app/public/photos/news/featured/'.$imageHashName)->resize(330,225);

            $image2->save($path1.'/'.$imageHashName);
            $image->save($path2.'/'.$imageHashName);
        }

        $news = News::find($this->news_id);
        $news->title = $this->title;
        $news->si_title = $this->sn_title;
        $news->ta_title = $this->ta_title;
        $news->description = $this->description;
        $news->si_description = $this->si_description;
        $news->ta_description = $this->ta_description;
        $news->categories = json_encode($this->categories);
        if(!empty($this->photo)){
            $news->image = $imageHashName;
        }
        $news->added_by = auth()->user()->id;
        $news->save();

        session()->flash('message', 'News successfully updated.');

         $this->title = '';
         $this->sn_title = '';
         $this->ta_title = '';
         $this->description = '';
         $this->si_description = '';
         $this->ta_description = '';
         $this->categories = [];
         $this->photo = '';


    }

    public function isPublished(){
        $case = News::find($this->news_id);
        //dd($case);
        $case->published = $case->published ? false : true;
        $case->save();
        $this->mount($this->news_id);
    }

    public function render()
    {
        return view('livewire.admin.press.edit-news');
    }
}
