<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scholarship;
use App\ScholarshipType;
use App\ScholarshipDegree;
use Auth;
use Session;
use Illuminate\Support\Facades\DB;


class ScholarshipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('update','create','store','destroy','deletescholarship');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scholarships = Scholarship::orderBy('id', 'desc')->get();
        return view('scholarships')->with('scholarships', $scholarships);
        // return redirect()->route('home2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        
        if(Auth::user()->usertype ==3 or Auth::user()->usertype == 2)
        {
            Session::put('message', 'You are not allowed to post a scholarship');
            return redirect()->back();
        }
        return view('newscholarship');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->usertype ==3 or Auth::user()->usertype == 2)
        {
            Session::put('message', 'You are not allowed to post a scholarship');
            return redirect()->back();
        }

        DB::transaction(function()use($request){
            $newscholarship = new Scholarship;
            $newscholarship->name = $request->input('title');
            $newscholarship->country = $request->input('country');
            $newscholarship->openingdate = $request->input('openingdate');
            $newscholarship->closingdate = $request->input('closingdate');
            $newscholarship->scholarshipdetails = $request->input('scholarshipdetails');
            $newscholarship->whocanapply = $request->input('whocanapply');
            if($request->input('aboutscholarship')!=""){
                $newscholarship->about = $request->input('aboutscholarship');
            }
            else{
                $newscholarship->about = "N/A";
            }
            if($request->input('briefdescription')!=""){
                $newscholarship->briefdescription = $request->input('briefdescription');
            }
            else{
                $newscholarship->briefdescription = "N/A";
            }

            $newscholarship->fields = $request->input('fields');
            $newscholarship->link = $request->input('applicationlink');
            $newscholarship->save();

            if($request->input('type')){
                foreach($request->input('type') as $type){
                    $newtype = new ScholarshipType;
                    $newtype->scholarship_id = $newscholarship->id;
                    $newtype->type = $type;
                    $newtype->save();
                }
            }
            if($request->input('degrees')){
                foreach($request->input('degrees') as $degree){
                    $newdegree = new ScholarshipDegree;
                    $newdegree->scholarship_id = $newscholarship->id;
                    $newdegree->degree = $degree;
                    $newdegree->save();
                }
            }
        });
        Session::put('message','The Scholarship was uploaded successfully!');
        return redirect()->route('adminpanel');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $scholarship = Scholarship::where('id', $id)->with('scholarshiptype', 'scholarshipdegree')->first();
        $related = Scholarship::where('id', '!=', $id)->get();
        return view('scholarshipdetails')->with('scholarship', $scholarship)->with('related', $related);
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

    public function searchscholarship(Request $request){
        // Getting the data from that come from the view.
        $degree = $request->degree;
        $type = $request->type;
        // Initiating a query for scholarship.
        $result = Scholarship::select('openingdate', 'closingdate', 'name', 'country', 'id');
        // If the filter is requested for degree.
        if($degree != ""){
            // Filtering scholarships based on the degree.
            $result->wherehas('scholarshipdegree', function($scholarshipdegree) use ($degree){$scholarshipdegree->where('degree', $degree);});
        }
        // If the filter is requested for type.
        if($type != ""){
            // Filtering scholarships based on the type.
            $result->wherehas('scholarshiptype', function($scholarshiptype) use ($type){$scholarshiptype->where('type', $type);});
        }
        // Running the above query.
        $newResult = $result->orderBy('id', 'DESC')->get();
        // Sending back the data to the view.
        return response()->json($newResult);
    }
    public function scholarshipoutside(Request $request){
        return redirect()->away($request->input('link'));
    }

    public function deletescholarship(Request $request){
        if(Auth::user()->usertype ==3 or Auth::user()->usertype == 2)
        {
            Session::put('message', 'You are not allowed to post a scholarship');
            return redirect()->back();
        }

        $del = Scholarship::find($request->sid)->delete();
        $del2 = ScholarshipType::where('scholarship_id', $request->sid)->delete();        
        return response()->json(['message'=>'Deleted']);
    }
}
