<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(isset(Auth::user()->usertype)){
                if(Auth::user()->usertype == 1 or Auth::user()->usertype == 4){
                    return redirect()->route('adminpanel');
                }
                elseif(Auth::user()->usertype == 2){
                    return redirect()->route('companyprofile');
                }
                else{
                    Session::put('You are already logged in!');
                    return redirect()->back();
                }
            }
            return redirect()->back();
        }

        return $next($request);
    }
}
