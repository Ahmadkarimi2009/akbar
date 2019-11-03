<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Session;

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
    protected $redirectTo = '/home2';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        if($request->input('admin') && Auth::user()->usertype != 1){
            Session::put('message','You are not an admin');
            return redirect()->route('forcelogout');
        }

        if($request->input('notadmin') && Auth::user()->usertype == 1){
            Session::put('message','Please login from the admin login page');
            return redirect()->route('forcelogout');
        }
        
        if(Auth::user()->usertype==2){
            if(Auth::user()->company->status == 0){
                Session::put('message', 'Your account is not activated yet! Please check your email.');
                return redirect()->route('forcelogout');
            }
            elseif(Auth::user()->company->completion == 0){
                return redirect()->route('ccompletion', Auth::user()->company->user);                
            }
            else{
                Session::put('message', 'Welcome back '.Auth::user()->company->name);
                return redirect()->route('companyprofile');
            }
        }
        elseif(Auth::user()->usertype == 1){
            Session::put('message','Welcome back '.Auth::user()->name.'!');
            return redirect()->route('adminpanel');
        }
        else{
            return redirect()->route('home2');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/home2');
    }
}
