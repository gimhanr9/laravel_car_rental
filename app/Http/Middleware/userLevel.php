<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class userLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
        if(Auth::check()){
            if(Auth::user()->level=="Admin"){
                return $next($request);

            }else if(Auth::user()->level=="Officer"){
                return redirect('/officer/home')->with('status','Access Denied');

            }else{
                return redirect('/home')->with('status','Access Denied!');
            }

        }else{
            return redirect()->back()->with('status','Please Login!');
        }
    }
}
