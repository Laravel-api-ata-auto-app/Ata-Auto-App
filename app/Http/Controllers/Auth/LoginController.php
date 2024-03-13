<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected function authenticated()
    // {
    //     if(Auth::user()->role=='0'){
    //         return redirect('admin/dashboard')->
    //         with('message','Welcome to Dashboard');
    //     }
    //     else{
    //         return redirect('/home')->
    //         with('status','Logged In Sucessfully');
    //     }
    //     if(Auth::user()->role=='1'){
    //         return redirect('enduser/dashboard')->
    //         with('message','Welcome to enduser Dashboard');
    //     }
    //     else{
    //         return redirect('home')->
    //         with('status','Logged In Sucessfully');
    //     }
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function login(Request $request){

        $credentials=$request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt(($credentials))){
            $user_role=Auth::user()->role;
            switch($user_role)
            {
                case 1: 
                        return redirect('/admin/dashboard');
                        break;
                case 2: 
                        return redirect('/user/dashboard');                     
                        break;
                case 3: 
                        return redirect('/shop/dashboard');                     
                        break;
                case 4: 
                        return redirect('/garage/dashboard');                     
                        break;
                case 5: 
                        return redirect('/trainer/dashboard');                     
                        break;
                default:
                        Auth::logout();
                        return redirect('login')->with('error','sth wrong');

            }
        }
        else {
            return redirect('/login')->with("Invaled account or password!");
        }
    }
}
