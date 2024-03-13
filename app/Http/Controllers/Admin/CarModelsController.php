<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Carmodels;
use Illuminate\Support\Facades\DB;

class CarModelsController extends Controller
{
    public function index(){
     $CarModels= carmodels::all();
     //dd($CarModels->toArray());
     return view('admin.Carmodel.index', compact('CarModels'));
    }
    public function create(){
        $brandlist= brand::select('Name')->get();
        
        return view('admin.CarModel.create')->with('Brandslist',$brandlist);
   }
     public function store(request $request){
          $carmodel=new Carmodels;
          $carmodel->Name=$request['Name'];
          $carmodel->Year=$request['Year'];
          $carmodel->Brand=$request['Brand'];
          $carmodel->use=$request['use'];
          $carmodel->save();
          return redirect('admin/Carmodel')->with('message', 'Car Model Addedd sucessefully.');

     }
     public function edit($id)
    {
        //
       $CarModel=Carmodels::find($id);
        return view('admin.Carmodel.edit')->with('CarModel',$CarModel);
    }
    public function update(request $request, $id)
    {
     $CarModel=Carmodels::find($id);
     $CarModel->Name=$request['Name'];
     $CarModel->Year=$request['Year'];
     $CarModel->use=$request['use'];
     $CarModel->save();
     return redirect('admin/Carmodel')->with('flash_message', 'Model Updated!');
    }
    public function destroy($id )
    {
        //
       Carmodels::destroy($id);
        return redirect('admin/Carmodel')->with('flash_message', 'Model deleted!');
    }
}
