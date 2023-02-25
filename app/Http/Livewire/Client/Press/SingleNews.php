<?php

namespace App\Http\Livewire\Client\Press;

use App\Models\News;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SingleNews extends Component
{
    public $news = [];

    public $latest_news;

    public $query;

    public function searchNews()
    {
        return redirect()->to('/all-news?query='.$this->query);
    }

    public function searchCat($id)
    {
        return redirect()->to('/all-news?cat='.$id);
    }

    public function mount($news)
    {
        $this->news = $news->toArray();
        $this->latest_news = News::whereNotIn('id', [$news->id])->latest()->get()->take(3);
    }

    public function render()
    {
        $cat = DB::table('news_categries')->join('news_categories', 'news_categories.id', '=', 'news_categries.category_id')
        ->select(DB::raw('count(*) as count, name'), 'category_id')
        ->groupBy('name')
        ->get();

        return view('livewire.client.press.single-news')->with('cat', $cat);
    }
}
