<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Product;
use App\Models\shopsProfile;
use Illuminate\Http\Request;
use App\Http\Middleware\user\user;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SellProductsController extends Controller
{
    //
    public function index()
    {
        $userid=Auth::user()->id;
        $shopsProfile=shopsProfile::firstOrNew(['UserID' =>$userid]);
        $products = DB::table('products')->where('ShopID', $shopsProfile->id)->get();
        return view('shop.SellProducts.index',['Products'=>$products,'shopsProfile'=>$shopsProfile]);
    }
    public function create(){
        $category=category::all();
        //dd($category);
        $userid=Auth::user()->id;
      
      $shopsProfile=shopsProfile::firstOrNew(['UserID' =>$userid]);
      //dd($shopsProfile);
        return view('shop.SellProducts.create',['category'=>$category,'shopsProfile'=>$shopsProfile]);
   }
        public function store(request $request)
    {
          $Product=new Product;
          if($request->hasFile('ProductPicture'))
          {
            $Product->Name=$request['ProductName'];
            $Product->Made_IN=$request['ProductMakeIN'];
            $Product->Condiction=$request['ProductCondiction'];
            $Product->Price=$request['ProductPrice'];
            $Product->Warranty=$request['Warranty'];
            $Product->Posted=Carbon::now()->format('Y-m-d');;
            $Product->CateID=$request['ProductCate'];
            $Product->ShopID=$request['ShopID'];
           
                $file=$request->file('ProductPicture');
                $ext=$file->getClientOriginalExtension();
                $filename= $Product->Name.'-picture.'.$ext;
                $ShopName=$request['ShopName'];
                $file->move('uploads/Products/'.$ShopName.'/',$filename);

                $Product->Picture=$filename;
            }
          $Product->save();
         return redirect('shop/Products')->with('message', 'Product Addedd sucessefully.');
    }
    public function edit($id){
      $Product=product::find($id);
      $category=category::all();
      $userid=Auth::user()->id;
      $shopsProfile=shopsProfile::firstOrNew(['UserID' =>$userid]);
      return view('shop.SellProducts.edit',['category'=>$category,'shopsProfile'=>$shopsProfile,'Product'=>$Product]);//,['category'=>$category,'shopsProfile'=>$shopsProfile]);
 }
    public function update(request $request,$id)
    {
      $Product=product::find($id);
        $Product->Name=$request['ProductName'];
        $Product->Made_IN=$request['ProductMakeIN'];
        $Product->Condiction=$request['ProductCondiction'];
        $Product->Price=$request['ProductPrice'];
        $Product->Warranty=$request['Warranty'];
        $Product->Posted=Carbon::now()->format('Y-m-d');;
        $Product->CateID=$request['ProductCate'];
        $Product->ShopID=$request['ShopID'];
        if($request->hasFile('ProductPicture'))
          {
                $file=$request->file('ProductPicture');
                $ext=$file->getClientOriginalExtension();
                $filename= $Product->Name.'-picture.'.$ext;
                $ShopName=$request['ShopName'];
                $file->move('uploads/Products/'.$ShopName.'/',$filename);

                $Product->Picture=$filename;
            }
        $Product->save();
         return redirect('shop/Products')->with('message', 'Product Updated sucessefully.');
      }
      public function destroy($id )
    {
        //
        product::destroy($id);
        return redirect('shop/Products')->with('flash_message', 'Product deleted!');
    }
    
}
