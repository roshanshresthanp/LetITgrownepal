<?php

namespace App\Http\Controllers;
use App\Models\Strategy;

use Illuminate\Http\Request;

class StrategyController extends Controller
{
    public function create()
    {
        return view('admin.strategy.create');
    }
    
    public function store(Request $request)
    {
        $strategy = new Strategy();
        $strategy->heading = $request->input('heading');
        $strategy->description = $request->input('description');
        $strategy->save();

        return redirect('/strategy/add')->with('success','Strategy added successfully !!');
    } 
}
