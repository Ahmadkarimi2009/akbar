<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookCategory;
use Auth;
use Session;

class BookCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('update','create','store','destroy','deletebookcategory');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = BookCategory::all();
        return view('bookcategory')->with('categories', $categories);
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
            Session::put('message', 'You are not allowed to create book category');
            return redirect()->back();
        }

        return view('newbookcategory');
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
            Session::put('message', 'You are not allowed to store book category');
            return redirect()->back();
        }

        $category = new BookCategory;
        $category->category = $request->input('name');
        $category->save();

        Session::put('message', 'The category was added successfully!');
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
            Session::put('message', 'You are not allowed to edit book category');
            return redirect()->back();
        }
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
            Session::put('message', 'You are not allowed to update book category');
            return redirect()->back();
        }
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

    public function deletebookcategory(Request $request){
        if(Auth::user()->usertype ==3 or Auth::user()->usertype == 2)
        {
            Session::put('message', 'You are not allowed to delete book category');
            return redirect()->back();
        }

        $jobcategory = BookCategory::find($request->id)->delete();

        $newcategories = Bookcategory::all();
        return response()->json(['success'=>'Data Successfully Deleted', $newcategories]);
    }
}
