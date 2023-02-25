<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function press()
    {
        return view('press');
    }

    public function news_single($id, $title)
    {
        $news = News::find($id);

        return view('news-single', compact('id', 'news'));
    }

    public function about_us()
    {
        return view('about_us');
    }

    public function bmic()
    {
        return view('bmic');
    }

    public function contact_us()
    {
        return view('contact-us');
    }

    public function careers()
    {
        return view('careers');
    }

    public function all_news(Request $request)
    {
        return view('all-news')->with(['query' => $request->input('query'), 'cat' => $request->input('cat')]);
    }

    public function covid19()
    {
        return view('covid19');
    }

    public function bdswhoweare()
    {
        return view('pages.bds-who-we-are-new');
    }

    public function case_study_single(Request $request)
    {
        return view('bmic.case-study-single')->with(['title' => $request->input('title'), 'id' => $request->input('id')]);
    }
}
