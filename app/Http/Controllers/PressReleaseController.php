<?php

namespace App\Http\Controllers;

use App\Models\admin\PressRelease;
use Illuminate\Http\Request;

class PressReleaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.press.press-releases');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.press.create-press');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function show(PressRelease $pressRelease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $press = PressRelease::find($id);

        return view('admin.press.edit-press', compact('press'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PressRelease $pressRelease)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function destroy(PressRelease $pressRelease)
    {
        //
    }
}
