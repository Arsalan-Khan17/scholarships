<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;

class MainController extends Controller
{

    function index(){
        $data['scholarships'] = Scholarship::orderBy('created_at', 'desc')->get();
        return view('index',$data);
    }
    function save_scholarship(Request $request){
        $data = $request->all();
        Scholarship::create($data);
        return redirect('/')->with('message','Added Successfully');

    }
}
