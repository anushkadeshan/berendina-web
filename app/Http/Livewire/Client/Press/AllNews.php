<?php

namespace App\Http\Livewire\Client\Press;

use App\Models\News;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AllNews extends Component
{
    public $news;

    public $latest_news;

    public $query = '';

    public function searchQuery()
    {
        $this->news = News::where('title', 'like', '%'.$this->query.'%')
            ->orWhere('si_title', 'like', '%'.$this->query.'%')
            ->orWhere('ta_title', 'like', '%'.$this->query.'%')
            ->orWhere('description', 'like', '%'.$this->query.'%')
            ->orWhere('si_description', 'like', '%'.$this->query.'%')
            ->orWhere('ta_description', 'like', '%'.$this->query.'%')
            ->get();
    }

    public function mount($query, $cat)
    {
        if ($query) {
            $this->query = $query;
            $this->searchQuery();
        } elseif ($cat) {
            $this->searchCat($cat);
        } else {
            $this->news = News::latest()->get();
        }
        $this->latest_news = News::latest()->get()->take(3);
    }

    public function searchCat($id)
    {
        $this->news = DB::table('news_categries')->join('news', 'news.id', '=', 'news_categries.news_id')
            ->where('news_categries.category_id', $id)
            ->get();
    }

    public function render()
    {
        $cat = DB::table('news_categries')->join('news_categories', 'news_categories.id', '=', 'news_categries.category_id')
        ->select(DB::raw('count(*) as count, name'), 'category_id')
        ->groupBy('name')
        ->get();

        return view('livewire.client.press.all-news')->with('cat', $cat);
    }
}
