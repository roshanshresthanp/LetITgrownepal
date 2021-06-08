<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Strategy;
use App\Models\Notice;
use App\Models\Gallery;


class PageController extends Controller
{

    
    public function home()
    {
        $strategy = Strategy::all();
        $notice = Notice::orderBy('id','desc')->get();
        $gallery = Gallery::paginate(3);
        return view('pages.index',compact('strategy','notice','gallery'));
     
    }
    
    
}
