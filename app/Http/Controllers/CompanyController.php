<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Illuminate\Support\Facades\Mail;
use App\Mail\VarifyMail;
use App\User;
use App\CompanyEmail;
use App\CompanyPhone;
use App\JobCategory;
use Auth;
use Session;

use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('companies')->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newcompany');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->usertype = 2;
        $user->avatar = "assets/avatars/company.png";
        $user->password = bcrypt($request->input('password'));
        $user->save();


        $company = new Company;
        if($request->input('website') != ""){
            $company->website = $request->input('website');
        }
        $company->name = $request->input('name');
        $company->type = $request->input('type');
        $company->city = $request->input('city');
        $company->phone = $request->input('phone');
        $company->varificationcode = sha1(time());
        $company->profile_description = "No description";
        $company->user_id = $user->id;
        $company->save();


        Session::put('message', 'Thank You for registering! Please click on the link we just emailed you to verify your account!');
        Mail::to($request->input('email'))->send(new VarifyMail($company));
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
        DB::transaction(function()use($request, $id){
            $update = Company::where('user_id', $id)->first();
            $update->city = $request->input('city');
            $update->phone = $request->input('phone');
            $update->address = $request->input('address');
            $update->profile_description = $request->input('description');
            $update->completion = 1;

            $update2 = User::find($id);

            if($request->hasFile('logopic')){
                $cfile =  $request->file('logopic');
                $cfilenewname = time().$cfile->getClientOriginalName();


                $cfile->move('assets/avatars', $cfilenewname);
                $update2->avatar ="assets/avatars/".$cfilenewname;
            }

            $update2->save();
            $update->save();
        });

        Session::put('message', 'Your profile is now completed!');
        return redirect()->route('companyprofile');
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

    public function companyprofile(Request $request){
        if(Auth::user()->usertype !=2)
        {
            return redirect()->back();
            Session::put('message', "You don't have permission to access this company profile!");
        }

        $categories = JobCategory::all();
        $company = Company::where('id', Auth::user()->id)->with('companyemail', 'companyphone', 'user')->get();
        // return view('companyprofile')->with('company', $company)->with('categories', $categories);
        dd($company);
        
    }



    public function varifycompany($token){
          $varifycompany = Company::where('varificationcode', $token)->first();
          if(isset($varifycompany)){
            if($varifycompany->status != 0){
                echo "Your account is already Activated. Proceed to Login Page";
            }
            else{
                echo "Your accound is successfully verified.!";
                Company::where('varificationcode', $token)->first()->update([
                    'status' => 1
                ]);
            }
          }
    }

    public function companyeditdata(Request $request){
        $propert = $request->property;
        if($propert=='name'){
            $updateuser = User::find(Auth::user()->id);
            $updateuser->$propert = $request->value;
            $updateuser->save();

            $updatecomp = Company::where('user_id', Auth::user()->id)->first();
            $updatecomp->$propert = $request->value;
            $updatecomp->save();

            $sendbackdata =$request->value;

        }
        else{
            if($propert=="email"){
                $updateemail = CompanyEmail::where('email', $request->old)->first();
                $updateemail->$propert = $request->value;
                $updateemail->save();

                $sendbackdata =$request->value;

            }
            elseif($propert=="phone"){
                $updatephone = CompanyPhone::where('phone', $request->old)->first();
                $updatephone->$propert = $request->value;
                $updatephone->save();

                $sendbackdata =$request->value;
            }
            elseif($propert=="username"){
                $updateusername = User::where('email', $request->old)->first();
                $updateusername->email = $request->value;
                $updateusername->save();

                $sendbackdata =$request->value;
            }
            elseif($propert=="mainphone"){
                $updatemainphone = Company::where('phone', $request->old)->first();
                $updatemainphone->phone = $request->value;
                $updatemainphone->save();

                $sendbackdata =$request->value;
            }
            elseif($propert=="about"){
                $updateabout = Company::where('profile_description', $request->old)->first();
                $updateabout->profile_description = $request->value;
                $updateabout->save();

                $sendbackdata =$request->value;
            }
            else{
                $updatecomp = Company::where('user_id', Auth::user()->id)->first();
                $updatecomp->$propert = $request->value;
                $updatecomp->save();

                $sendbackdata =$request->value;
            }
            
        }
        return response()->json(['message'=>"The School Was Deleted Successfully!", 'status'=>'success', 'databack'=>$sendbackdata]);
    }

    public function changecompanypassword(Request $request){
        $reterievepassword = User::where('id', Auth::user()->id)->first();
        if(Hash::check($request->currentpassword, $reterievepassword->password)){
            $reterievepassword->password = Hash::make($request->newpassword);
            $reterievepassword->save();
            $checkpassword = "The Passowrd is changed";
        }
        else{
            $checkpassword = "Wrong Password";
        }
        return response()->json(['message'=>$checkpassword]);
    }


    public function ccompletion($id){
        return view('completecompanyprofile')->with('id', $id);
    }

    public function deletecompany(Request $request){
        $del = Company::where('user_id', $request->id)->delete();
        $del2 = User::find($request->id)->delete();
        $del3 = Jobs::where('company_id', $request->id)->delete();
        return response()->json(['message'=>'Deleted']);
    }
}
