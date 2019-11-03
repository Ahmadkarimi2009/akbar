<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\JobCategory;
use App\Jobs;
use App\JobSkill;
use App\JobEmail;
use App\JobLocation;
use App\JobLanguage;
use App\Company;

use Session;
use Illuminate\Support\Facades\DB;


class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('update','create','store','destroy','deletejob','deactivatejob');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = JobCategory::all();
        $jobs = Jobs::with('company')->with('joblocation')->orderBy('id', 'desc')->get();
        return view('jobs2')->with('jobs', $jobs)->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        if(Auth::user()->usertype ==3)
        {
            return redirect()->back();
            Session::put('message', 'You can not post a job');
        }

        $categories = JobCategory::all();
        if(Auth::user()->usertype == 2){
            if(Auth::user()->company->status == 0){
                Session::put('message', 'Your account is not verified yet! Please check you email.');
                return redirect()->back();
            }
            if(Auth::user()->company->completion == 0){
                Session::put('message', 'You have not completed your profile info. You cannot post a job yet.');
                return redirect()->route('ccompletion', Auth::user()->id);
            }
            return view('newjob')->with('categories', $categories);
        }
        $companies = Company::where('status', 1)->get();
        return view('newjob')->with('categories', $categories)->with('companies', $companies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->usertype == 3)
        {
            Session::put('message', 'You are not allowed to post a Job');
            return redirect()->back();
        }

        DB::transaction(function()use($request){

            if(Auth::user()->usertype == 1 or Auth::user()->usertype == 4){
                $checkcompanyexist = Company::where('name',$request->input('company'))->first();
                if(isset($checkcompanyexist)){
                    $companyid = $checkcompanyexist->id;
                }
                else{
                    $newcompany = new Company;
                    $newcompany->user_id = 0;
                    $newcompany->name = $request->input('company');
                    $newcompany->website = 'N/A';
                    $newcompany->status = 0;
                    $newcompany->varificationcode = 'N/A';
                    $newcompany->type = "temporary";
                    $newcompany->phone = 0;
                    $newcompany->city = 'N/A';
                    $newcompany->completion = 0;
                    $newcompany->address = 'N/A';
                    $newcompany->profile_description = 'N/A';
                    $newcompany->save();
    
                    $companyid = $newcompany->id;
                }
            }
            else{
                $companyid = Auth::user()->id;
            }
            


            $new = new Jobs;
            if($request->input('salary')==""){
                $new->salary = "As per company salary scale";
            }
            else{
                $new->salary = $request->input('salary');  
            }
            $new->isactive = true;
            $new->company_id = $companyid;
            $new->category_id = $request->input('category');
            $new->title = $request->input('title');
            $new->openingdate = $request->input('openingdate');
            $new->closingdate = $request->input('closingdate');
            if($request->input('nationality') !=""){
                $new->nationality = $request->input('nationality');
            }
            else{
                $new->nationality = "Afghan";
            }
            if($request->input('numberofjobs')!=""){
                $new->numberofjobs = $request->input('numberofjobs');
            }
            else{
                $new->numberofjobs = 1;
            }
            $new->gender = $request->input('gender');
            $new->vacancynumber = $request->input('vacancynumber');
            $new->contracttype = $request->input('contracttype');
            $new->contractduration = $request->input('contractduration');

            $new->aboutcompany = $request->input('aboutcompany');
            $new->responsibilities = $request->input('responsibilities');
            $new->qualifications = $request->input('requirements');
            $new->guide = $request->input('guide');
            $new->jobdescription = 'N/A';

            if($request->input('worktype')!=""){
                $new->worktype = $request->input('worktype');
            }
            else{
                $new->worktype = "Full Time";
            }
            $new->experienceyears = $request->input('experienceyears');

            if($request->hasFile('applicationform')){
                $cfile =  $request->file('applicationform');
                $cfilenewname = time().$cfile->getClientOriginalName();;


                $cfile->move('assets/forms', $cfilenewname);
                $new->file ="assets/forms/".$cfilenewname;
            }

            $new->save();

            if($request->input('languages')){
                $languages = explode(',', $request->input('languages'));
                foreach($languages as $lang){
                    $newlang = new JobLanguage;
                    $newlang->job_id = $new->id;
                    $newlang->language = $lang;
                    $newlang->save();
                }
            }

            if($request->input('skills')){
                $skilss = explode(',', $request->input('skills'));
                foreach($skilss as $skill){
                    $newskill = new JobSkill;
                    $newskill->job_id = $new->id;
                    $newskill->skill = $skill;
                    $newskill->save();
                }
            }

            if($request->input('locations')){
                foreach($request->input('locations') as $location){
                    $newloc = new JobLocation;
                    $newloc->job_id = $new->id;
                    $newloc->location = $location;
                    $newloc->save();
                }
            }

            if($request->input('emails')){
                $emails = explode(',', $request->input('emails'));
                foreach($emails as $email){
                    $newemail = new JobEmail;
                    $newemail->job_id = $new->id;
                    $newemail->email = $email;
                    $newemail->save();
                }
            }
        });

        Session::put('message', 'The Job was posted successfully!');

        if(Auth::user()->usertype == 2){
            return redirect()->route('companyprofile');
        }
        else{
            return redirect()->route('adminpanel');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Jobs::where('id', $id)->with('jobemail', 'jobskill', 'joblanguage', 'joblocation')->get();
        if (sizeOf($job) > 0) {
            $view = Jobs::find($id);
            $view->increment('timeviewed');
        }
        $related = Jobs::where('id', '!=', $id)->get();

        return view('jobdetails')->with('job', $job)->with('related', $related);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
    
    public function jobdetails($id){
        $job = Jobs::find($id);
        $related = Jobs::all();
        return view('jobdetails')->with('job', $job)->with('related',$related);
    }

    public function downloadfile(Request $request){
        return response()->download(public_path($request->input('filepath')));
        // echo $request->input('filepath');
    }

    public function companyprofilejobeditingsubmit(Request $request){
        return response()->json(['message'=>$request->aboutcompany]);
    }
    public function deletejob(Request $request){
        $findjob = Jobs::where('id', $request->jid)->first();
        if(isset($findjob->id)){
            if(Auth::user()->usertype ==3)
            {
                Session::put('message', 'You are not allowed to delete this Job');
                return redirect()->back();
            }
    
    
            $findjob->delete();
            $del2 = JobSkill::where('job_id', $request->jid)->delete();
            $del3 = JobLocation::where('job_id', $request->jid)->delete();
            $del4 = JobEmail::where('job_id', $request->jid)->delete();
            $del5 = JobLanguage::where('job_id', $request->jid)->delete();

        return response()->json(['message'=>"Successfull"]);

        }
        
        
        return response()->json(['message'=>"The Job is no Longer Available!"]);
    }

    public function deactivatejob(Request $request){
        $job = Jobs::find($request->jobid);
        $job->isactive = false;
        $job->save();
        return response()->json(['message'=>"The Job was Deactivated successfully!"]);

    }

    public function searchjob(Request $request) {
        $category = $request->category;
        $experience = $request->experience;
        $location = $request->location;
        // Setting a connection and choosing Jobs.
        $result = Jobs::select('closingdate', 'title', 'company_id', 'id', 'numberofjobs')->with('company:id,name')->with('joblocation:location,job_id');
        // dd($result);
        if($location != ""){
            $result->wherehas('joblocation', function($joblocation) use ($location){$joblocation->where('location', $location);});
        }
        if($category != ""){
            $result->where('category_id', $category);
        }
        if ($experience != "") {
            $result->where('experienceyears', 'like', "%$experience%");
        }
        $newResult = $result->orderBy('id', 'DESC')->get();
        return response()->json($newResult);
    }
    public function companyalljobs($id){
        $job = Jobs::where('id', $id)->with('jobemail', 'jobskill', 'joblanguage', 'joblocation')->first();
        $companyjobs = Jobs::where('company_id', $job->company_id)->where('id', '!=', $job->id)->get();

        if(count($companyjobs)>0){
            return view('companyjobs')->with('job', $job)->with('companyjobs', $companyjobs);
        }
        else{
            return redirect()->route('jobs.show', $id);
        }
    }
}
