<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Carmodels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaintainDocsController extends Controller
{
    public function index()
    {
        $brand=Brand::all();
        return view('admin.Docs.index',['brands'=>$brand]);
    }
    public function create()
    {
        $brand=Brand::all();
        return view('admin.Docs.create',['brands'=>$brand]);
    }
    public function edit($brand, $model)
    {
        
        //return $brand.''. $model;
        return view('admin.Docs.edit',['brandsName'=>$brand,'modelName'=>$model]);
    }
    
    public function show($brandName)
    {
          
        $repairdocs = DB::table('carmodels')
                    ->leftJoin(DB::raw('(SELECT ModelID, Docs_Path FROM maintain_docs) as maintain_docs'), function ($join) {
                    $join->on('carmodels.id', '=', 'maintain_docs.ModelID');
                     })
                    ->select(
                        'carmodels.Name as ModelName',
                        'carmodels.Brand as Brand',
                        'maintain_docs.Docs_Path as Docs_Path',
                        'maintain_docs.ModelID as ModelId')
                    ->where('carmodels.Brand', '=', $brandName) // Adding the additional condition here
                    ->get();      
        
        return view('Admin.Docs.Models.index',['repairdocs'=>$repairdocs]);
    }
}
