<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\News;
class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('update','create', 'store','destroy','deletenews');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = News::orderBy('id', 'desc')->get();
        return view('posts')->with('posts', $posts);
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
            Session::put('message', 'You are not allowed to post story');
            return redirect()->back();
        }

        return view('newpost');
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

        $new = new News;
        $new->title = $request->input('title');
        $new->body = $request->input('body');
        $new->introduction = $request->input('introduction');
        $new->conclusion = "N/A";

        $cfile =  $request->file('image');
        $cfilenewname = time().$cfile->getClientOriginalName();
        $cfile->move('assets/blog', $cfilenewname);
        $new->image ="assets/blog/".$cfilenewname;
        
        $new->save();
        
        Session::put('message', 'The Post was added successfully!');
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
        $post = News::find($id);
        return view('postdetails')->with('post', $post);
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
            Session::put('message', 'You are not allowed to post an RFP');
            return redirect()->back();
        }

        $news = News::find($id);
        return view('editnews')->with('news', $news);
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
        if($request->input('body')){
            $target = "Body";
            $news = News::find($id);
            $news->body = $request->input('body');
            $news->save();
        }
        else if($request->input('introduction')){
            $target = "Introduction";
            $news = News::find($id);
            $news->introduction = $request->input('introduction');
            $news->save();
        }
        else{
            $target = "Title";
            $news = News::find($id);
            $news->title = $request->input('title');
            $news->save();
        }


        Session::put('message', $target.' updated successfully!');
        return redirect()->back();
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
    public function deletenews(Request $request){
        if(Auth::user()->usertype ==3 or Auth::user()->usertype == 2)
        {
            Session::put('message', 'You are not allowed to post an RFP');
            return redirect()->back();
        }

        
        $del = News::find($request->nid)->delete();
        return response()->json(['message'=>'Deleted']);
    }
}
