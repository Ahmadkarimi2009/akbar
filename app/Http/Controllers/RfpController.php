<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rfp;
use Auth;
use Session;

class RfpController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('update','create','store','destroy','deleterfp');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rfps = Rfp::orderBy('id', 'desc')->get();
        return view('rfps')->with('rfps', $rfps);
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
            Session::put('message', 'You are not allowed to post an RFP');
            return redirect()->back();
        }
        return view('newrfp');
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
            Session::put('message', 'You are not allowed to post an RFP');
            return redirect()->back();
        }


        $new = new Rfp;
        $new->title = $request->input('title');
        $new->description = $request->input('description');
        $new->closingdate = $request->input('closingdate');
        if($request->hasFile('file')){
            $cfile =  $request->file('file');
            $cfilenewname = time().$cfile->getClientOriginalName();


            $cfile->move('assets/rfps', $cfilenewname);
            $new->file ="assets/rfps/".$cfilenewname;
        }
        $new->company = $request->input('company');
        $new->save();

        Session::put('message','The RFP was posted successfully!');
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
        $rfp = Rfp::find($id);
        return view('rfpdetails')->with('rfp', $rfp);
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
    public function searchrfp(Request $request){
        $title = $request->title;
        $company = $request->company;

        if($title !="" and $company !=""){
            $result = Rfp::where([['title', 'like', "%{$title}%"],['company','like',"%{$company}%"]])->get();
        }
        elseif($title =="" and $company !=""){
            $result = Rfp::where('company','like',"%{$company}%")->get();
        }
        else{
            $result = Rfp::where('title', 'like', "%{$title}%")->get();
        }
        

        return response()->json(['message'=> $result]);
    }

    public function deleterfp(Request $request){
        if(Auth::user()->usertype ==3 or Auth::user()->usertype == 2)
        {
            Session::put('message', 'You are not allowed to delete an RFP');
            return redirect()->back();
        }

            
        $del = Rfp::find($request->rid)->delete();
        return response()->json(['message'=> "Deleted"]);        
    }
}
