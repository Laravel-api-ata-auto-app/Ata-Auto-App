<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dtc;

class getDtcsController extends Controller
{
    //
    public function index(){
        return view('user.getdtc.index');
    }
    public function Search(request $request){
        $dtc_code= $request['DTC_Code'];
        $result=dtc::firstOrNew(['DTC_Code'=>$dtc_code]);
       // return [$result->DTC_Code,$result->Khdtc,$result->Endtc];
        return view('user.getdtc.show')->with('result',$result);
    }
}
