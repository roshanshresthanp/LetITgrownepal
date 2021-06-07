<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Notice;

class NoticeController extends Controller
{
    public function create()
    {
        $notice = Notice::all();
        // $visions = Strategy::where('heading','vision')->get();
        // var_dump($vision);
        return view('admin.notice.create',compact('notice'));
        

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

        $notice = new Notice();
        $notice->image = $filenameToStore;
        $notice->description = $request->input('description');
        $notice->save();

        return redirect('/notice/add')->with('success','Notice added successfully !!');
    } 

    public function delete($id)
    {
        $notice = Notice::find($id);
        

        if($notice->image !== 'noimage.jpg'){
            Storage::delete('public/gallery/'.$notice->image);
        }
        $notice->delete();

        return redirect('/notice/add')->with('success','Notice deleted successfully !!');
    }

    public function imageUpload(Request $request)
    {

    }


}
