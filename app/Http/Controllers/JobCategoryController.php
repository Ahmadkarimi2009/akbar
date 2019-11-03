<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobcategory;
use Auth;
use Session;

class JobCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('update','create','store','destroy','deletejobcategory');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = JobCategory::all();
        return view('jobcategory')->with('categories', $categories);
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
            Session::put('message', 'You are not allowed to add Job Category');
            return redirect()->back();
        }
        return view('newjobcategory');
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
            Session::put('message', 'You are not allowed to store job category');
            return redirect()->back();
        }

        $category = new JobCategory;
        $category->name = $request->input('name');
        $category->save();

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
        if(Auth::user()->usertype ==3 or Auth::user()->usertype == 2)
        {
            Session::put('message', 'You are not allowed to update job category');
            return redirect()->back();
        }
        $category = JobCategory::find($id);
        return view('editjobcategory')->with('category', $category);
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
        if(Auth::user()->usertype ==3 or Auth::user()->usertype == 2)
        {
            Session::put('message', 'You are not allowed to update job category');
            return redirect()->back();
        }
        
        JobCategory::find($id)->update([
            'name'=>$request->input('name')
        ]);

        Session::put('message', 'The category has been updated successfully');
        return redirect()->route('adminpanel');               
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

    public function deletejobcategory(Request $request){
        if(Auth::user()->usertype ==3 or Auth::user()->usertype == 2)
        {
            Session::put('message', 'You are not allowed to delete job category');
            return redirect()->back();
        }


        $jobcategory = JobCategory::find($request->id)->delete();

        $newcategories = Jobcategory::all();
        return response()->json(['success'=>'Data Successfully Deleted', $newcategories]);
    }
}
