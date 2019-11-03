<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ApplyMail;
use App\User;
use App\JobSeeker;
use App\Jobs;
use Auth;
use Session;
use Hash;
use File;
class JobSeekerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('update','destroy','jobseekerinfoupdate','changeseekerpassword','deleteuser');
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
        return view('newjobseeker');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newuser = new User;
        $newuser->name = $request->input('name');
        $newuser->password = bcrypt($request->input('password'));
        $newuser->email = $request->input('email');
        $newuser->avatar = 'assets/avatars/user.jpg';
        $newuser->usertype = 3;
        $newuser->save();

        $newjobseeker = new JobSeeker;

        if($request->hasFile('file')){
            $cfile =  $request->file('file');
            $cfilenewname = time().$cfile->getClientOriginalName();
            $cfile->move('assets/cv', $cfilenewname);
            $newjobseeker->cv ="assets/cv/".$cfilenewname;
        }
        $newjobseeker->phone = 0;
        $newjobseeker->lastname = $request->input('lastname');
        $newjobseeker->city = 'n/a';
        $newjobseeker->address = 'n/a';
        $newjobseeker->user_id = $newuser->id;
        $newjobseeker->save();
        
        Session::put('message','Your account is created, Please log in');
        return redirect()->route('login');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seeker = JobSeeker::where('user_id', $id)->with('user')->first();
        return view('jobseekerprofile')->with('seeker', $seeker);
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
    public function jobseekerprofile(Request $request){

        $seeker = JobSeeker::where('user_id', $request->input('id'))->with('user')->first();
        return view('jobseekerprofile')->with('seeker', $seeker);

    }

    public function jobseekerinfoupdate(Request $request){

        $propert = $request->property;
        if($propert=='name'){
            $updateuser = User::find(Auth::user()->id);
            $updateuser->$propert = $request->value;
            $updateuser->save();

            $sendbackdata =$request->value;

        }
        else{
            if($propert=="username"){
                $updateemail = User::where('email', $request->old)->first();
                $updateemail->email = $request->value;
                $updateemail->save();
                $sendbackdata =$request->value;
            } elseif ($propert == "mainphone") {
                $updatemainphone = JobSeeker::where('phone', $request->old)->first();
                $updatemainphone->$propert = $request->value;
                $updatemainphone->save();

                $sendbackdata =$request->value;
            } elseif ($propert == "lastname") {
                $updatemainphone = JobSeeker::where('lastname', $request->old)->first();
                $updatemainphone->$propert = $request->value;
                $updatemainphone->save();

                $sendbackdata =$request->value;
            } else {
                $updatecomp = JobSeeker::where('user_id', Auth::user()->id)->first();
                $updatecomp->$propert = $request->value;
                $updatecomp->save();

                $sendbackdata =$request->value;
            }
            
        }
        return response()->json(['message'=>"The School Was Deleted Successfully!", 'status'=>'success', 'databack'=>$sendbackdata]);
    }

    public function changeseekerpassword(Request $request){
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
    public function deleteuser(Request $request){
        $del = JobSeeker::where('user_id', $request->uid)->delete();
        $del2 = User::find($request->uid)->delete();

        return response()->json(['message'=>"Deleted"]);
    }

    public function jobapplication($id){
        if(!isset(Auth::user()->id)){
            Session::put('message', 'You have to login first to apply for the job!');
            return redirect()->route('login');
        }
        $job = Jobs::where('id', $id)->with('jobemail')->first();
        $user = Auth::user();
        return view('jobapplication')->with('job', $job)->with('user', $user);
    }
    public function jobapplicationsend(Request $request)
    {

            if($request->input('cvindicator') == 'no'){
                $cfile =  $request->file('cv');
                $cfilenewname = time().$cfile->getClientOriginalName();
                $cfile->move('assets/cvs', $cfilenewname);
                $filepath ="assets/cvs/".$cfilenewname;
                $data = ['cv'=>$filepath, 'subject'=>$request->input('subject'), 'body'=>$request->input('body')];
            }
            else{
                $data = ['cv'=>$request->input('profilecv'), 'subject'=>$request->input('subject'), 'body'=>$request->input('body')];
            }



        Mail::to($request->input('email'))
        ->cc($request->input('myemail'))
        ->send(new ApplyMail($data));

        Session::put('message', 'You applied for the job successfully!');   
        return redirect()->back();
        // Mail::send('emails.apply', function($m)use($request){
        //     $m->to($request->input('email'))->subject('Hellow bazam');
        // });
    }
    public function jobseekerchangepic(Request $request)
    {
        if ($request->hasFile('profilePic')) {
            $cfile =  $request->file('profilePic');
            $cfilenewname = time().$cfile->getClientOriginalName();
            $cfile->move('assets/avatars', $cfilenewname);
            
            $filepath ="assets/avatars/".$cfilenewname;
            $updateuser = User::find(Auth::user()->id);
            if(File::exists($updateuser->avatar)) {
                if ($updateuser->avatar != "assets/avatars/user.jpg") {
                    File::delete($updateuser->avatar);
                }
            }

            $updateuser->avatar = "assets/avatars/". $cfilenewname;
            $updateuser->save();
            $response = true;
        } else {
            $response = false;
        }
        return response()->json(['message' => $response]);
    }
}
