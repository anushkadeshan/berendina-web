<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin\Career;

class CareerController extends Controller
{
    public function index(){
        return view('admin.careers.index');
    }

    public function create(){
        return view('admin.careers.create');
    }

    public function edit($id){
        $career = Career::find($id);
        return view('admin.careers.edit',compact('career'));
    }

    public function view($id,$career){
        $career = Career::find($id);
        return view('careers_view',compact('career'));
    }
}
