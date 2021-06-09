<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Strategy;
use App\Models\Notice;
use App\Models\Gallery;

use DataTables;


class PageController extends Controller
{

    
    public function home()
    {
        $strategy = Strategy::all();
        $notice = Notice::orderBy('id','desc')->get();
        $gallery = Gallery::paginate(3);
        return view('pages.index',compact('strategy','notice','gallery'));
     
    }

    public function datatable(Request $request)
    {
        
            if ($request->ajax()) {
                $data = Strategy::latest()->get();
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('action', function($row){
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm"> View</a>';
                            return $btn;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
            }
    
            return view('pages.datatable');
        
    }
    
    
}
