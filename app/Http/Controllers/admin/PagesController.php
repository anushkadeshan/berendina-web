<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function news()
    {
        return view('admin.press.news');
    }

    public function categories()
    {
        return view('admin.press.categories');
    }

    public function addCategory()
    {
        return view('admin.press.add-category');
    }

    public function addNews()
    {
        return view('admin.press.add-news');
    }

    public function editNews($id)
    {
        return view('admin.press.edit-news', compact('id'));
    }

    public function addMedia()
    {
        return view('admin.press.add-media');
    }

    public function editMedia($id)
    {
        return view('admin.press.edit-media', compact('id'));
    }

    public function media()
    {
        return view('admin.press.media-table');
    }

    public function caseStudies()
    {
        return view('admin.bds.case-studies');
    }

    public function AddcaseStudies()
    {
        return view('admin.bds.add-casestudies');
    }

    public function editCaseStudies($id)
    {
        return view('admin.bds.edit-case-study', compact('id'));
    }

    public function editContacts($id){
        return view('admin.contacts.edit',compact('id'));
    }
}
