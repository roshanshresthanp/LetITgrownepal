<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Strategy;

class PageController extends Controller
{
    public function home()
    {
        $strategy = Strategy::all();
        return view('pages.index',compact('strategy'));
    }
}
