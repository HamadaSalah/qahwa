<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\User;
use App\Models\WebsiteData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class settingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = WebsiteData::first();
        return view('Admin.settings.edit', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->except('_token');

        if ($request->hasFile('private_img')) {
            $file = $request->file('private_img');
            $ext = $file->getClientOriginalExtension();
            $filename = 'sliderIMG'.'_'.time().'.'.$ext;
            $destinationPath = public_path().'/assets/img' ;
            $storagePath = Storage::disk('public_uploads')->put('/images', $file) ;
            $storageName = basename($storagePath);
            $requestData['private_img'] = $storageName;
        }
        if ($request->hasFile('about_page_1_img')) {
            $file = $request->file('about_page_1_img');
            $ext = $file->getClientOriginalExtension();
            $filename = 'sliderIMG'.'_'.time().'.'.$ext;
            $destinationPath = public_path().'/assets/img' ;
            $storagePath = Storage::disk('public_uploads')->put('/images', $file) ;
            $storageName = basename($storagePath);
            $requestData['about_page_1_img'] = $storageName;
        }
        if ($request->hasFile('about_page_2_img')) {
            $file = $request->file('about_page_2_img');
            $ext = $file->getClientOriginalExtension();
            $filename = 'sliderIMG'.'_'.time().'.'.$ext;
            $destinationPath = public_path().'/assets/img' ;
            $storagePath = Storage::disk('public_uploads')->put('/images', $file) ;
            $storageName = basename($storagePath);
            $requestData['about_page_2_img'] = $storageName;
        }

        $settings = WebsiteData::first();

        $settings->update($requestData);

        return redirect()->route('settings');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function users()
    {
        return view('Admin.settings.index',[
            'users' => User::all()
        ]);
    }
}
