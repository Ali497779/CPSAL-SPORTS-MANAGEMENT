<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Sport;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.page.index');
    }

    //  HOME START
    public function create()
    {
        $home = 'Home';
        $about = 'About';
        $players = 'Players';
        $gallery = 'Gallery';
        $contact = 'Contact';


        // $tt = Page::where('name','Gallery')->where('type','Paragraph')->first();
        // dd($tt);
        return view('admin.page.home', [
            'homes' => Page::where('name',$home)->get(),
            'hometitle' => Page::where('name',$home)->first(),
            'about' => Page::where('name',$about)->get(),
            'abouttitle' => Page::where('name',$about)->first(),
            'player' => Page::where('name',$players)->get(),
            'playertitle' => Page::where('name',$players)->first(),
            'galery' => Gallery::get(),
            'galleryheading' => Page::where('name','Gallery')->where('type','Heading')->first(),
            'galleryparagraph' => Page::where('name','Gallery')->where('type','Paragraph')->first(),
            'contact' => Page::where('name',$contact)->get(),
            'contacttitle' => Page::where('name',$contact)->first(),
            'sport' => Sport::get(),
            'galleryitem' => Gallery::get(),
            'footers' => Page::where('name','Footer')->get()

            // 'seohometitle' => seo::where('page',$home)->first(),

        ]);
    }
// --------------------Deactive Item------------------------------- 
    public function deactiveitem($itemID){
        
        $page = Page::find($itemID);
        if($page->status == 0){
            
            Page::find($itemID)->update(['status' => '1']);
            Page::where('parent',$itemID)->update(['status' => '1']);
        }elseif($page->status == 1){
            Page::find($itemID)->update(['status' => '0']);
            Page::where('parent',$itemID)->update(['status' => '0']);
        }
        return back();
    }

    // --------------------Home Dynamic------------------------------- 


    public function home(){
        return view('admin.page.homes', [
            'home' => Page::where('name','Home')->get(),
        ]);
    }


    public function addbanner(Request $request)
    {

        // dd($request->type);
        $file = $request->file('bannerimgvalue');
        $extension = $file->getClientOriginalExtension();
        $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
        $picture = $request->bannerimgvalue->move(public_path('assets/'.$request->type), $filename);


        $parentPage = new Page();
        $parentPage->name = $request->name;
        $parentPage->type = $request->type;
        $parentPage->value = $filename;
        $parentPage->isupload = $request->isupload;
        $parentPage->save();

        $page = new Page();
        $page->name = $request->name;
        $page->parent = $parentPage->id;
        $page->type = $request->bannerheading;
        $page->value = $request->bannerheadingvalue;
        $page->save();

        $page = new Page();
        $page->name = $request->name;
        $page->parent = $parentPage->id;
        $page->type = $request->bannerquote;
        $page->value = $request->bannerquotevalue;
        $page->save();
        return to_route('admin.page.home')->with('message', 'Banner added successfully');
    }

    public function getbannerdata($bannerId){
        return Page::where('id',$bannerId)->orWhere('parent',$bannerId)->get();
    }

    public function getcard($bannerId){
        return Page::where('id',$bannerId)->orWhere('parent',$bannerId)->get();
    }

    public function getlawofplay($bannerId){
        return Page::where('id',$bannerId)->orWhere('parent',$bannerId)->get();
    }
    public function getfrequent($bannerId){
        return Page::where('id',$bannerId)->orWhere('parent',$bannerId)->get();
    }


    public function updatebanner($bannerId, Request $request){

        if ($request->hasFile('value')) {
            $file = $request->file('value');
            $extension = $file->getClientOriginalExtension();
            $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
            $picture = $request->value->move(public_path('assets/banner'), $filename);
        }

        

        Page::find($bannerId)->where('type','banner')->update([
            'value' => $filename,    
        ]);

        Page::where('parent',$bannerId)->where('type','bannerheading')->update([
            'value' => $request->bannerHeading,    
        ]);

        Page::where('parent',$bannerId)->where('type','bannerquote')->update([
            'value' => $request->bannerQuote,    
        ]);
        return to_route('admin.page.home')->with('message', 'Banner Edit successfully');
    }


    public function updatecard($bannerId, Request $request){

       

        if($bannerId == 7){
             if ($request->hasFile('value')) {
            $file = $request->file('value');
            $extension = $file->getClientOriginalExtension();
            $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
            $picture = $request->value->move(public_path('assets/card'), $filename);
        }
        }
        if($bannerId == 10){
            if ($request->hasFile('value')) {
           $file = $request->file('value');
           $extension = $file->getClientOriginalExtension();
           $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
           $picture = $request->value->move(public_path('assets/card'), $filename);
       }
       }
       

        

        Page::where('id',$bannerId)->where('type','imgcard1')->update([
            'value' => $filename,    
        ]);

        Page::where('parent',$bannerId)->where('type','headingcard1')->update([
            'value' => $request->cardHeading,    
        ]);

        Page::where('parent',$bannerId)->where('type','cardcontent1')->update([
            'value' => $request->cardPara,    
        ]);



        Page::where('id',$bannerId)->where('type','imgcard2')->update([
            'value' => $filename,
        ]);

        Page::where('parent',$bannerId)->where('type','headingcard2')->update([
            'value' => $request->cardHeading,    
        ]);

        Page::where('parent',$bannerId)->where('type','cardcontent2')->update([
            'value' => $request->cardPara,    
        ]); 


        return to_route('admin.page.home')->with('message', 'Card Edit successfully');
    }

    
    public function updatelawofplay($bannerId, Request $request){
  

            $file = $request->file('value');
            $extension = $file->getClientOriginalExtension();
            $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
            $picture = $request->value->move(public_path('assets/lawofplay'), $filename); 

        Page::where('id',$bannerId)->where('type','lawofplay')->update([
            'value' => $request->lawofplayval,    
        ]);

        Page::where('parent',$bannerId)->where('type','lawofplayfile')->update([
            'value' => $filename,    
        ]);

        return to_route('admin.page.home')->with('message', 'Law of Play Edit successfully');
    }

    public function updatefrequent($bannerId, Request $request){
        // dd($request);
        Page::where('id',$bannerId)->where('type','frequentquestion')->update([
            'value' => $request->value,
        ]);
        Page::where('parent',$bannerId)->where('type','frequentanswer')->update([
            'value' => $request->frequentanswer,
        ]);
        return back()->with('message', 'Frequent Q/A updated successfully');
    }

    public function itemedit($itemId, Request $request): RedirectResponse
    {
        $page = Page::where('id',$itemId)->pluck('isupload')->first();
        $type = Page::where('id',$itemId)->pluck('type')->first();

       
    if($page==1){
        $file = $request->file('value');
        $extension = $file->getClientOriginalExtension();
        $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
        $picture = $request->value->move(public_path('assets/'.$type), $filename);
        Page::find($itemId)->update([
            'value' => $filename
        ]);

    }
    else{
        Page::find($itemId)->update([
            'value' => $request->value
        ]);
    }

        return back()->with('message', 'Item updated successfully');
    }

    public function editgallery($itemId, Request $request){
        
        $file = $request->file('value');
        $extension = $file->getClientOriginalExtension();
        $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
        $picture = $request->value->move(public_path('assets/gallery'), $filename);
        Gallery::find($itemId)->update([
            'picture' => $filename
        ]);

        return back()->with('message', 'Gallery Item Edit successfully');

    }
    

    public function deletebanner($bannerId){
        Page::find($bannerId)->delete();
        Page::where('parent',$bannerId)->delete();
        return to_route('admin.page.home')->with('message', 'Banner Deleted successfully');
    }

    public function deletelawofplay($bannerId){
        Page::find($bannerId)->delete();
        Page::where('parent',$bannerId)->delete();
        return to_route('admin.page.home')->with('message', 'Law Deleted successfully');
    }

    public function deletefrequent($bannerId){
        Page::find($bannerId)->delete();
        Page::where('parent',$bannerId)->delete();
        return to_route('admin.page.home')->with('message', 'Frequent Question Deleted successfully');
    }

    public function deletecard($bannerId){
        Page::find($bannerId)->delete();
        Page::where('parent',$bannerId)->delete();
        return to_route('admin.page.contact')->with('message', 'Contact Deleted successfully');
    }
    





    public function addlawofplay(Request $request)
    {

        // dd($request->type);
        $file = $request->file('lawofplayfilevalue');
        $extension = $file->getClientOriginalExtension();
        $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
        $picture = $request->lawofplayfilevalue->move(public_path('assets/'.$request->type), $filename);


        $parentPage = new Page();
        $parentPage->name = $request->name;
        $parentPage->type = $request->type;
        $parentPage->value = $request->lawofplayvalue;
        $parentPage->save();

        $page = new Page();
        $parentPage->isupload = $request->isupload;
        $page->name = $request->name;
        $page->parent = $parentPage->id;
        $page->type = $request->lawofplayfile;
        $page->value = $filename;
        $page->save();

        return to_route('admin.page.home')->with('message', 'Law added successfully');
    }

    public function editlawofplay($itemId, Request $request){
        $file = $request->file('value');
        $extension = $file->getClientOriginalExtension();
        $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
        $picture = $request->lawofplayfilevalue->move(public_path('assets/'.$request->type), $filename);

    }

    public function addfrequent(Request $request)
    {

        $parentPage = new Page();
        $parentPage->name = $request->name;
        $parentPage->type = $request->type;
        $parentPage->value = $request->questionvalue;
        $parentPage->save();

        $page = new Page();
        $page->type = $request->frequentanswer;
        $page->name = $request->name;
        $page->parent = $parentPage->id;
        $page->value = $request->answervalue;
        $page->save();

        return to_route('admin.page.home')->with('message', 'Freqent Q/A added successfully');
    }



    
    // ----------------------------About Dynamic-----------------------------------
    public function about(){
        return view('admin.page.about', [
            'gridcontent1' => Page::where('name','About')->Where('id',15)->orWhere('parent',15)->get(),
            'image1' => Page::where('name','About')->Where('id',18)->orWhere('parent',18)->get(),
            'gridcontent2' => Page::where('name','About')->Where('id',22)->orWhere('parent',22)->get(),
            'image2' => Page::where('name','About')->Where('id',25)->orWhere('parent',25)->get(),
            'PlayerInformation' => Page::where('name','About')->Where('type','PlayerInformation')->get(),
        ]);
    }

    // ------------------------- Player Dynamic ------------------------------------
    public function player(){
        return view('admin.page.player', [
            'player' => Page::where('name','Players')->get(),
        ]);
    }

    public function galllery(){
        return view('admin.page.gallery', [
            'player' => Page::where('name','Gallery')->where('type','!=','Sport')->get(),
            'sport' => Sport::get(),
            'gallery' => Gallery::get(),
            'galleryitem' => Gallery::get(),
        ]);
    }

    public function update(Request $request, $pageid)
    {        

        if ($request->hasFile('value')) {
            // $avatar = $request->file('value')->store('value','public');
            $file = $request->file('value');
        $extension = $file->getClientOriginalExtension();
        $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
        $picture = $request->value->move(public_path('assets/'.$request->type), $filename);

            Page::find($pageid)->update([
            
                'value' => $filename,
                'status' => 1,
                'type' =>$request->type,
            ]);
        }
        else{
        Page::find($pageid)->update([
            
            'value' => $request->value,
            'status' => 1,
            'type' =>$request->type,
        
        ]);
        }        
        return to_route('admin.page.create')->with('message', 'Page Item updated successfully');
    }

    public function update2(Request $request, $pageid)
    {
        // dd($request);
        Page::find($pageid)->update([
            
            'value' => $request->value,
            'status' => 1,
            'contact_id' => $request->contact_id,
            'type' =>$request->type,
        
        ]);
            
        return to_route('admin.page.create')->with('message', 'Contact updated successfully');
    }
 

    public function addgalery(Request $request){
        
        $file = $request->file('picture');
        // dd($request->filter);
        $extension = $file->getClientOriginalExtension();
        $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
        $picture = $request->picture->move(public_path('assets/gallery'), $filename);
    
        // $picture = $request->picture->store('gallery','public');
        
        Gallery::create([
           'filter' => $request->filter,
           'page' => 'Gallery',
           'picture' =>$filename,
        ]);
        return back()->with('message', 'Gallery Item Added successfully');

    }

    // ----------------------------Contact Dynamic--------------------------
    public function contact(){
        return view('admin.page.contact', [
            'contact' => Page::where('name','Contact')->where('type','!=','Contact')->where('Parent',null)->get(),
            'contactcard' => Page::where('name','Contact')->where('type','Contact')->get(),
        ]);
    }

    public function getcontact($bannerId){
        return Page::where('id',$bannerId)->orWhere('parent',$bannerId)->get();
    }

    public function addcontactcard(Request $request){
        
        $parentpage = new Page();
        $parentpage->name = $request->pagevalue;
        $parentpage->type = $request->contacttype;
        $parentpage->value = $request->contactnamevalue;
        $parentpage->save();

        $pagephone = new Page();
        $pagephone->name = $request->pagevalue;
        $pagephone->parent = $parentpage->id;
        $pagephone->type = $request->contactphonetype;
        $pagephone->value= $request->contactphonevalue;
        $pagephone->save();



        $pagemail = new Page();
        $pagemail->name = $request->pagevalue;
        $pagemail->parent = $parentpage->id;
        $pagemail->type = $request->contactemailtype;
        $pagemail->value = $request->contactemailvalue;
        $pagemail->save();


        $pagelocat = new Page();
        $pagelocat->name = $request->pagevalue;
        $pagelocat->parent = $parentpage->id;
        $pagelocat->type = $request->contactlocationtype;
        $pagelocat->value = $request->contactlocationvalue;
        $pagelocat->save();



        return back()->with('message', 'New Contact Item Added successfully');

    }

    public function remove(Request $request, $id){
        $page = Page::find($id);
        $page->value = null;
        $page->status = 0;
        $page->save();
        return to_route('admin.page.create')->with('message', 'Remove value successfully');
    }

    public function addcontactinfo(Request $request, $contactid){


        $page = new Page();
        $page->name = $request->name;
        $page->status = 1;
         $page->contact_id = $request->contact_id;
        $page->type = 'phone';
        $page->value = $request->phone;
        $page->save();

        $page = new Page();
        $page->status = 1;

        $page->name = $request->name;
        $page->contact_id = $request->contact_id;
        $page->type = 'mail';
        $page->value = $request->mail;
        $page->save();

        $page = new Page();
        $page->status = 1;

        $page->name = $request->name;
        $page->contact_id = $request->contact_id;
        $page->type = 'loaction';
        $page->value = $request->location;
        $page->save();
        return to_route('admin.page.create')->with('message', 'Contact added successfully');
    }

    // -----------------------Footer---------------
    public function footer(){
        return view('admin.page.footer', [
            'footer' => Page::where('name','Footer')->get(),
        ]);
    }

    public function addpictures(){
        
    }

    
    
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
    public function destroygallery($galleryid)
    {

        $gallery = Gallery::find($galleryid)->delete();
        // dd($gallery);

        return back()->with('message', 'Gallery Item deleted successfully');
    }

    public function destroy($id)
    {
        $delete = Page::where('parent',$id)->delete();
        $gallery = Page::find($id)->delete();
        

        return back()->with('message', 'Item deleted successfully');
    }

}
