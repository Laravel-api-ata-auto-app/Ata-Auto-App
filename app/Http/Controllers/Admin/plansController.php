<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plans;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class plansController extends Controller
{
    public function index(){
        $Plans= DB::table('Plans')->paginate(4);
        
         return view('admin.plan.index')->with('Plans',$Plans);
    }
    public function create(){
        return view('admin.plan.create');
   }
  //  protected function validator(array $data)
  //   {
  //       return Validator::make($data, [
  //           'type_id'=>['required'],
  //           'Name' => ['required', 'string', 'max:255', 'unique:plans'],
  //           'Cost' =>['required'],
  //           'Detail' =>['required','string', 'max:255'],
  //           'Duration' =>['required'],
  //       ]);
  //   }
   public function store(request $request){
     //    $input = $request->all();
        $plans=new Plans;
          $plans->type_id=$request['type'];
          $plans->Name=$request['Name'];
          $plans->Cost=$request['Cost'];
          $plans->Detail=$request['Detail'];
          $plans->Duration=$request['Duration'];
    
          $plans->save();
        return redirect('admin/plans')->with('message', 'plan Addedd sucessefully.');
   }
   public function edit($Name)
   {
      
      $plan=plans::firstOrNew(['Name' =>$Name ]);
       return view('admin.plan.edit')->with('plan',$plan);
   }
   public function update(request $request, $Name){

    DB::table('plans')
    ->where('Name', $Name)
    ->update([
      'Cost' => $request['Cost'],
      'Detail'=>$request['Detail'],
      'Duration'=>$request['Duration']
    ]);
    return redirect('admin/plans')->with('message', 'plan Updated sucessefully.');
   }
   public function show(Plans $plan, Request $request)
    {
        $intent =auth()-> User()->createSetupIntent();
   
        return view("subscription", compact("plan", "intent"));
    }

   public function subscription(Request $request)
    {
        $plan = Plans::find($request->plan);
   
        $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
                        ->create($request->token);
        return view('subscription_success');
    }

   public function destroy($Name )
   {
       //
       DB::table('plans')
       ->where('Name', $Name)
       ->delete();
       return redirect('admin/plans')->with('flash_message', 'Plan deleted!');
   }
}
