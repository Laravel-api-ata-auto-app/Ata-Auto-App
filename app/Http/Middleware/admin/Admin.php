<?php

namespace App\Http\Middleware\admin;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        $user=Auth::user();
        if($user->role==1){
            return $next($request);
        }
        if($user->role==2){
            return redirect('/user');
        }
        if($user->role==3){
            return redirect('/shop');
        }
        if($user->role==4){
            return redirect('/garage');
        }
        if($user->role==5){
            return redirect('/trainer');
        }
        
    }
}
