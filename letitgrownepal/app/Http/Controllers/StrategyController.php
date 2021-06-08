<?php

namespace App\Http\Controllers;
use App\Models\Strategy;

use Illuminate\Http\Request;

class StrategyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        $strat = Strategy::all();
        // $visions = Strategy::where('heading','vision')->get();
        // var_dump($vision);
        return view('admin.strategy.create',compact('strat'));
        

    }
    
    public function store(Request $request)
    {
        $strategy = new Strategy();
        $strategy->heading = $request->input('heading');
        $strategy->description = $request->input('description');
        $strategy->save();

        return redirect('/strategy/add')->with('success','Strategy added successfully !!');
    } 

    public function delete($id)
    {
        $strat = Strategy::find($id);
        $strat->delete();
        return redirect('/strategy/add')->with('success','Strategy deleted successfully !!');
    }

    
}
