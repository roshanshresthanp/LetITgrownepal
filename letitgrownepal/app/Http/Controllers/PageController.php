<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Strategy;
use App\Models\Notice;

class PageController extends Controller
{
    public function home()
    {
        $strategy = Strategy::all();
        $notice = Notice::orderBy('id','desc')->get();
        return view('pages.index',compact('strategy','notice'));
    }
    
    
}
