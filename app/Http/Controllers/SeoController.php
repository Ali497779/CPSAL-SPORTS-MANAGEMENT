<?php

namespace App\Http\Controllers;

use App\Models\seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = 'Home'; 
        $about = 'About';
        $player = 'Player';
        $gallery = 'Gallery';
        $league = 'League';
        $match = 'Match';
        $contact = 'Contact';
        return view('admin.seo.list', [
            'seohome' => seo::where('page',$home)->get(),
            'seohometitle' => seo::where('page',$home)->first(),
            'seoabout' => seo::where('page',$about)->get(),
            'seoabouttitle' => seo::where('page',$about)->first(),
            'seoplayer' => seo::where('page',$player)->get(),
            'seoplayertitle' => seo::where('page',$player)->first(),
            'seogallery' => seo::where('page',$gallery)->get(),
            'seogallerytitle' => seo::where('page',$gallery)->first(),
            'seoleague' => seo::where('page',$league)->get(),
            'seoleaguetitle' => seo::where('page',$league)->first(),
            'seomatch' => seo::where('page',$match)->get(),
            'seomatchtitle' => seo::where('page',$match)->first(),
            'seocontact' => seo::where('page',$contact)->get(),
            'seocontacttitle' => seo::where('page',$contact)->first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $seoid)
    {
        Seo::find($seoid)->update([
            'value' => $request->value,
            'status' => 1,
            'title' =>$request->title,
        ]);

        return to_route('admin.seo.index')->with('message', 'SEO updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
