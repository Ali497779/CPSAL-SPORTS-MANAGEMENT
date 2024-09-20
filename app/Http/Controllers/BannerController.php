<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    
    public function index()
    {
        return view('admin.banner.list', [
            'banners' => Banner::get(),
        ]);
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    
  
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|image',
            'heading' => 'required',
            'quote' => 'required',
        ]);
    
        $banner = new Banner();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('banners', 'public');
            $banner->image = $imagePath;
        }
        $banner->heading = $request->input('heading');
        $banner->quote = $request->input('quote');
        $banner->save();
        return redirect()->route('admin.dashboard')->with('message', 'Banner added successfully');
    }

    
    public function show($bannerid)
    {
        return view('admin.banner.show', [
            'banners' => Banner::where('id', $bannerid)->latest()->get(),
        ]);
    }

    
    public function edit($bannerid)
    {
        return view('admin.banner.edit', [
            'banners' => Banner::where('id',$bannerid)->get(),

        ]);
    }

    
    public function update(Request $request,$battleid)
    {
        
    }

    
    public function destroy($battleid)
    {
        $battleid->delete();

        return back()->with('message', 'Banner deleted successfully');
    }
}
