<?php

namespace App\Http\Controllers\Admin\Docs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MaintainDocs;

class DocsUploadController extends Controller
{
    public function upload(Request $request)
    {

        $request->validate([
            'zip_file' => 'required|mimes:zip|max:204800', // Adjust max file size as needed
        ]);
        $Brand=request('brandsName');
        $Model=request('modelName');
        if ($request->file('zip_file')->isValid()) {
            $zip = new \ZipArchive;
            $zipPath = $request->file('zip_file')->path();
            $extractPath = public_path('uploads/Docs/'.$Brand.'/'.$Model);
            
            if ($zip->open($zipPath) === true) {
                $zip->extractTo($extractPath);
                $zip->close();
                
                $modelId = DB::table('carmodels')
                ->where('Name', $Model)
                ->value('id'); 
                $maintain_docs=null;
                $maintain_docs = MaintainDocs::where('modelID', $modelId)->first();
                if($maintain_docs==false){
                    $maintain_docs=new MaintainDocs;
                }

                $maintain_docs->Docs_Path='Docs/'.$Brand.'/'.$Model.'/';
                $maintain_docs->Desc=$Brand.'/'.$Model;
                $maintain_docs->modelID=$modelId;
                $maintain_docs->save();
                // DB::table('maintain_docs')
                // ->where('modelID', $modelId)
                // ->update(['Docs_Path' => 'Docs/'.$Brand.'/'.$Model.'/']);   
                
                $repairdocs = DB::table('carmodels')
                    ->leftJoin(DB::raw('(SELECT ModelID, Docs_Path FROM maintain_docs) as maintain_docs'), function ($join) {
                    $join->on('carmodels.id', '=', 'maintain_docs.ModelID');
                     })
                    ->select(
                        'carmodels.Name as ModelName',
                        'carmodels.Brand as Brand',
                        'maintain_docs.Docs_Path as Docs_Path',
                        'maintain_docs.ModelID as ModelId')
                    ->where('carmodels.Brand', '=', $Brand) // Adding the additional condition here
                    ->get();

                return view('Admin.Docs.Models.index',['repairdocs'=>$repairdocs]);
            } else {
                return redirect()->back()->with('error', 'Failed to extract the zip file.');
            }
        }

        return redirect()->back()->with('error', 'Invalid file uploaded.');
    }
}
