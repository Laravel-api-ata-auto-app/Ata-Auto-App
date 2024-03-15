<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class categorycontroller extends Controller
{
    //
    public function index(){
        $Categories=category::all();
        
          return response()->json($Categories);
       //  return view('admin.category.index')->with('categories',$Categories );
    }
}
