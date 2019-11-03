<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookCategory;
use App\Book;
use Auth;
use Session;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('update','create','store','destroy','deletebook');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        $categories = BookCategory::all();
        return view('books')->with('books', $books)->with('categories', $categories);
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
            Session::put('message', 'You are not allowed to Upload book');
            return redirect()->back();
        }

        $categories = BookCategory::all();
        return view('newbook')->with('categories', $categories);
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
            Session::put('message', 'You are not allowed to upload book');
            return redirect()->back();
        }


        $newbook = new Book;
        $newbook->name = $request->input('name');
        $newbook->edition = $request->input('edition');
        $newbook->category_id = $request->input('category');            
        $newbook->author = $request->input('author');

        if($request->input('isbn')){
            $newbook->isbn = $request->input('isbn');
        }
        else{
            $newbook->isbn = "Not Specified";            
        }

        if($request->input('printigdate')!=""){
            $newbook->printingdate = $request->input('printingdate');
        }
        else{
            $newbook->printingdate = "N/A";
        }

        if($request->input('translator')!=""){
            $newbook->translator = $request->input('translator');
        }
        else{
            $newbook->translator = "Not Specified";            
        }

        if($request->input('pagenumbers')!=""){
            $newbook->pagenumbers = $request->input('pagenumbers');
        }
        else{
            $newbook->pagenumbers = "Not Specified";            
        }

        if($request->input('price')!=""){
            $newbook->price = $request->input('price');
        }
        else{
            $newbook->price = "Not Specified";            
        }

        if($request->input('language')!=""){
            $newbook->language = $request->input('language');
        }
        else{
            $newbook->language = "Not Specified";            
        }

        if($request->input('description')!=""){
            $newbook->description = $request->input('description');
        }
        else{
            $newbook->description = "Not Specified";            
        }



        if($request->hasFile('file')){
            $cfile =  $request->file('file');
            $cfilenewname = time().$cfile->getClientOriginalName();


            $cfile->move('assets/books', $cfilenewname);
            $newbook->file ="assets/books/".$cfilenewname;
        }

        if($request->hasFile('coverpage')){
            $cfile =  $request->file('coverpage');
            $cfilenewname = time().$cfile->getClientOriginalName();


            $cfile->move('assets/coverpages', $cfilenewname);
            $newbook->coverpage ="assets/coverpages/".$cfilenewname;
        }



        $newbook->save();
        Session::put('message', 'The book was uploaded successfully!');
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
        $book = Book::find($id);
        $related = Book::where('id', '!=', $id)->get();
        return view('bookdetails')->with('book', $book)->with('related', $related);
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
            Session::put('message', 'You are not allowed to edit this book');
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
            Session::put('message', 'You are not allowed to edit this book');
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
        if(Auth::user()->usertype ==3 or Auth::user()->usertype == 2)
        {
            Session::put('message', 'You are not allowed to delete book');
            return redirect()->back();
        }
    }

    public function downloadbook($id){
        $findbookpath = Book::find($id);
        $findbookpath = $findbookpath->file;
        $response = response()->download(public_path($findbookpath));
        if($response){
            $update = Book::find($id);
            $update->increment('timesdownloaded');
            $update->save();
        }
        return $response;
    }

    public function searchbook(Request $request){
        $title = $request->title;
        $category = $request->category;

        $result = Book::select('name', 'coverpage', 'timesdownloaded', 'id');
        if($category != ""){
            $result->where('category_id', $category);
        }
        if($title != ""){
            $result->where('name', 'like', "%$title%");
        }
        $newResult = $result->get();
        
        return response()->json($newResult);
    }

    public function deletebook(Request $request){
        if(Auth::user()->usertype ==3 or Auth::user()->usertype == 2)
        {
            Session::put('message', 'You are not allowed to delete book');
            return redirect()->back();
        }

        $del = Book::find($request->bid)->delete();
        return response()->json(['message'=> "Deleted"]);
    }
}
