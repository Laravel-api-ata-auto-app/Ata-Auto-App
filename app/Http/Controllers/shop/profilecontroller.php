<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Http\Middleware\user\user;
use Illuminate\Http\Request;
use App\Models\shopsProfile;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;




class profilecontroller extends Controller
{
    //
    public function index()
    {
        $userid=Auth::user()->id;
      
        $shopsProfile=shopsProfile::firstOrNew(['UserID' =>$userid]);
        
         return view('shop.ShopProfile.index')->with('shopsProfile',$shopsProfile);
    }
    public function store(request $request)
    {
     
        $shopProfile= new shopsProfile;
        $shopProfile->UserID=Auth::user()->id;
        $shopProfile->Name=$request['ShopName'];
        $shopProfile->Contact_Name=$request['ContactName'];
        $shopProfile->Contact_Number=$request['ContactNumber'];
        $shopProfile->Facebooks=$request['FaceBook'];
        $shopProfile->Telegram=$request['Telegram'];
        //$shopProfile->Name=$request['Website'];
        $adddress=$request['Province'].','.$request['District'].','.$request['Commune'];
        $shopProfile->Address=$adddress;

        if($request->hasFile('ProfilePicture')){

            $file=$request->file('ProfilePicture');
            $ext=$file->getClientOriginalExtension();
            $filename=$shopProfile->Name.'-picture.'.$ext;

            $file->move('uploads/Shop/',$filename);

            $shopProfile->Picture=$filename;
        }
        $shopProfile->save();
        return redirect('shop/Profile')->with('message', 'Profile was saved.');
    }
    public function edit()
   {
      $userid=Auth::user()->id;
      
      $shopsProfile=shopsProfile::firstOrNew(['UserID' =>$userid]);
      //dd($shopsProfile);
       return view('shop.ShopProfile.edit')->with('shopsProfile',$shopsProfile);
   }
   public function update(request $request)
   {
    $userid=Auth::user()->id;
      
      $shopProfile=shopsProfile::firstOrNew(['UserID' =>$userid]);
      

       if($request->hasFile('ProfilePicture')){
        
        $file=$request->file('ProfilePicture');
        $ext=$file->getClientOriginalExtension();
        $filename=$shopProfile->Name.'-picture.'.$ext;

        $file->move('uploads/Shop/',$filename);

        $shopProfile->Picture=$filename;
    

       $shopProfile->Name=$request['ShopName'];
       $shopProfile->Contact_Name=$request['ContactName'];
       $shopProfile->Contact_Number=$request['ContactNumber'];
       $shopProfile->Facebooks=$request['FaceBook'];
       $shopProfile->Telegram=$request['Telegram'];
       //$shopProfile->Name=$request['Website'];
       $adddress=$request['Province'].','.$request['District'].','.$request['Commune'];
       $shopProfile->Address=$adddress;

       
       $shopProfile->save();
    }
       return redirect('shop/Profile')->with('message', 'Profile was saved.');
   }

  
   
}
