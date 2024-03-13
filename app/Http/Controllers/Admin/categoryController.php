<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class categoryController extends Controller
{
    //
    public function index(){
        $Categories=category::all();
        
         return view('admin.category.index')->with('categories',$Categories );
    }
    public function create(){
        return view('admin.category.create');
   }
   public function store(request $request){
    $category=new category;
    $category->Name=$request['category_Name'];
    
    
    $category->save();
    return redirect('admin/category')->with('message', 'category Addedd sucessefully.');

    }
    public function edit($id)
   {
      
    $category=category::find($id);
       return view('admin.category.edit')->with('category',$category);
   }
   public function update(request $request, $id)
   {
    $category=category::find($id);
    $category->Name=$request['category_Name'];
    
    $category->save();
    return redirect('admin/category')->with('flash_message', 'Model Updated!');
   }
   public function destroy($id )
    {
        //
       category::destroy($id);
        return redirect('admin/category')->with('flash_message', 'Model deleted!');
    }
}
