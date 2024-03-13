<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imports\DTCsImport;
use Maatwebsite\Excel\Facades\Excel;


class importexcel extends Controller
{
    //
    public function index(){
       
        
         return view('admin.DTC.index')
        
         ;
    }
    public function import(Request $request)
    {
     $this->validate($request, [
      'excel_file'  => 'required|mimes:xls,xlsx'
     ]);

    // $path = $request->file('excel_file')->getRealPath();

    $file = $request->file('excel_file');
    Excel::import(new DTCsImport, $file);
     return back()->with('success', 'Excel Data Imported successfully.');
    }
}
