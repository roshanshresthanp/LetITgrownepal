<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $gallery = Gallery::orderBy('id','desc')->get();
        return view('admin.gallery.create',compact('gallery'));
        

    }
    
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $filenameFull = $request->file('image')->getClientOriginalName();

            $filename = pathinfo($filenameFull,PATHINFO_FILENAME);

            $extension = $request->file('image')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'.'.$extension;
            // upload image
            $path = $request->file('image')->storeAs('public/gallery',$filenameToStore);

        } else {
            $filenameToStore = 'noimage.jpg';
        }

        $gallery = new Gallery();
        $gallery->image = $filenameToStore;
        $gallery->description = $request->input('description');
        $gallery->save();

        return redirect('/gallery/add')->with('success','Gallery added successfully !!');
    } 

    public function delete($id)
    {
        $gallery = Gallery::find($id);
        if($gallery->image !== 'noimage.jpg'){
            Storage::delete('public/gallery/'.$gallery->image);
        }
        $gallery->delete();

        return redirect('/gallery/add')->with('success','Gallery deleted successfully !!');
    }

}
