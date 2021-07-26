<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function press(){
        return view('press');
    }

    public function news_single(){
        return view('news-single');
    }

    public function about_us(){
        return view('about_us');
    }

    public function bmic(){
        return view('bmic');
    }

    public function contact_us(){
        return view('contact-us');
    }

    public function careers(){
        return view('careers');
    }
}
