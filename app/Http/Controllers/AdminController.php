<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use App\Scholarship;
use App\Book;
use App\Rfp;
use App\News;
use App\User;
use App\JobCategory;
use App\BookCategory;
use App\Subscription;

use Auth;
use Hash;
use Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('login');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function adminpanel(){
        if(Auth::user()->usertype!=1){
            return redirect()->back()->with('message','This URL is for Super Admin only!');
        }
        $jobs = Jobs::all();
        $schos = Scholarship::all();
        $rfps = Rfp::all();
        $books = Book::all();
        $posts = News::all();
        $subscription = Subscription::all();
        $jobcategory = JobCategory::all();
        $bookcategory = BookCategory::all();
        $users = User::where('usertype', 3)->get();
        $admins = User::where('usertype', 4)->get();
        $companies = User::where('usertype', 2)->with('jobseeker')->get();
        return view('adminpanel')->with(['jobs'=>$jobs, 'schos'=>$schos, 'rfps'=>$rfps, 'books'=>$books, 'subscription'=>$subscription, 'jobcategory'=>$jobcategory, 'bookcategory'=>$bookcategory, 'users'=>$users, 'admins'=>$admins, 'companies'=>$companies, 'posts'=>$posts]);
    }



    public function adminedit(Request $request){
        $propert = $request->property;
        if($propert=="username"){
            $updateemail = User::where('email', $request->old)->first();
            $updateemail->email = $request->value;
            $updateemail->save();
            $sendbackdata =$request->value;

        }
        return response()->json(['message'=>"The School Was Deleted Successfully!", 'status'=>'success', 'databack'=>$sendbackdata]);
    }

    public function changeadminpassword(Request $request){
        $reterievepassword = User::where('id', Auth::user()->id)->first();
        if(Hash::check($request->currentpassword, $reterievepassword->password)){
            $reterievepassword->password = Hash::make($request->newpassword);
            $reterievepassword->save();
            $checkpassword = "The Passowrd is changed";
        }
        else{
            $checkpassword = "Your Current Pasword is wrong. Please Write the currect one";
        }
        return response()->json(['message'=>$checkpassword]);
    }

    public function deleteadmin(Request $request){
        $del = User::find($request->aid)->delete();
        return response()->json(['message', 'Deleted']);
    }

    public function login(){
        if(isset(Auth::user()->usertype)){
            if(Auth::user()->usertype == 1){
                return redirect()->route('adminpanel');
            }
            else{
                Session::put('message','You are already logged in in the system, but not as an admin. Logout first!');
                return redirect()->back();
            }
        }
        return view('adminlogin');

    }
}
