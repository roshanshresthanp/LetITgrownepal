<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Notice;
use Illuminate\Support\Facades\Storage;

class NoticeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $notice = Notice::orderBy('id','desc')->get();
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
            $path = $request->file('image')->storeAs('public/notice',$filenameToStore);

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
            Storage::delete('public/notice/'.$notice->image);
        }
        $notice->delete();

        return redirect('/notice/add')->with('success','Notice deleted successfully !!');
    }

    public function edit($id)
    {
        $notice = Notice::orderBy('id','desc')->get();
        $new = Notice::find($id);
        return view('admin.notice.edit',compact('notice','new'));
    }
    
    public function update(Request $request ,$id)
    {
        $notice = Notice::find($id);
        $notice->description = $request->input('description');
        $notice->update();
        return redirect('/notice/add')->with('success','Notice updated successfully !!');
    }


}
