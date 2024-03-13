<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandFormRequest;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandContoller extends Controller
{
    public function index(){
        $Brands=brand::all();
        // return view('')-with('brand',$Brand);
         return view('admin.brand.index')->with('Brands',$Brands);
    }
    public function create(){
        return view('admin.brand.create');
   }

   public function store(BrandFormRequest $request)
    {
        // $input = $request->all();
        // Brand::create($input);
        $validatedData=$request->validated();
       
        $brand=new Brand;
        $brand->Name=$validatedData['Name'];
        if($request->hasFile('Logo')){

            $file=$request->file('Logo');
            $ext=$file->getClientOriginalExtension();
            $filename=$brand->Name.'-logo.'.$ext;

            $file->move('uploads/Brand',$filename);

            $brand->Logo=$filename;
        }
        

        $brand->Made=$validatedData['Made'];
        $brand->Region=$validatedData['Region'];

        $brand->save();
        return redirect('admin/brand')->with('message', 'Brand Addedd sucessefully.');
    }

    public function show()
    {
        return view('admin.brand.show')->with('students show',);
    }

    public function edit($id)
    {
        //
       $Brand=Brand::find($id);
        return view('admin.brand.edit')->with('Brand',$Brand);
    }

    public function update(BrandFormRequest $request, $id)
    {
        //
        $validatedData=$request->validated();
        $brand=Brand::find($id);
        $brand->Name=$validatedData['Name'];
        if($request->hasFile('Logo')){

            $file=$request->file('Logo');
            $ext=$file->getClientOriginalExtension();
            $filename=$brand->Name.'-logo.'.$ext;

            $file->move('uploads/Brand',$filename);

            $brand->Logo=$filename;
        }
        

        $brand->Made=$validatedData['Made'];
        $brand->Region=$validatedData['Region'];

        $brand->save();
        return redirect('admin/brand')->with('flash_message', 'Brand Updated!');
    }
    public function destroy($id )
    {
        //
       Brand::destroy($id);
        return redirect('admin/brand')->with('flash_message', 'Brand deleted!');
    }
}
