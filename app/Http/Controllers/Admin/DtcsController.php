<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dtc;
use Illuminate\Support\Facades\DB;
use App\Imports\DTCsImport;

class DtcsController extends Controller
{
    //
    public function index(){
        $Dtc=dtc::all();
        
         return view('admin.DTC.index')->with('dtcs',$Dtc);
    }
    
    public function create(){
        return view('admin.DTC.create');
   }
   public function store(request $request){
    $dtc=new dtc;
    $dtc->DTC_Code=$request['dtc_code'];
    $dtc->Khdtc=$request['kh_script'];
    $dtc->Endtc=$request['en_script'];
    
    $dtc->save();
    return redirect('admin/DTC')->with('message', 'DTC Addedd sucessefully.');

}
public function edit($DTC_Code)
   {
      
      $dtc=dtc::firstOrNew(['DTC_Code' =>$DTC_Code ]);
       return view('admin.DTC.edit')->with('dtc',$dtc);
   }
   public function update(request $request, $DTC_Code){

    DB::table('dtcs')
    ->where('DTC_Code', $DTC_Code)
    ->update([
      'Khdtc'=> $request['kh_script'],
      'Endtc'=>$request['en_script'],
       ]);
    return redirect('admin/DTC')->with('message', 'DTC Updated sucessefully.');
   }
public function destroy($DTC_Code )
   {
       //
       DB::table('dtcs')
       ->where('DTC_Code', $DTC_Code)
       ->delete();
       return redirect('admin/DTC')->with('flash_message', 'DTC deleted!');
   }

}
