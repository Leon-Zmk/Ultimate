<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=post::all();
        return view("dashboard.post_lists",compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.post_add");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepostRequest $request)
    {   

        $request->validate([
            "headline"=>"required|min:10|max:100",
            "postdatas"=>"required|min:10",
            "thumbnail"=>"required|mimes:jpg,png|file|max:10000"
        ]);

       
        $post= new post();
        $post->headline=$request->headline;
        $post->description=$request->postdatas;
        if($request->hasFile("thumbnail")){

            $file=$request->file("thumbnail");
            $newname="thumbnail".uniqid().".".$file->extension();
            $file->storeAs("public/thumbnail/",$newname);
            $post->thumbnail=$newname;
        }
        $post->postowner=Auth::user()->id;
        $post->post_status="1";
        $post->save();

        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {   
        $post=post::find($request->id);
        return view("dashboard.post_edit",compact('post'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepostRequest  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepostRequest $request)
    {
        $request->validate([
            "headline"=>"required|min:10|max:100",
            "thumbnail"=>"nullable|mimes:jpg,png|file|max:10000",
            "postdatas"=>"required|min:10",
        ]);

        $post=post::find($request->id);
        $post->headline=$request->headline;
        $post->description=$request->postdatas;
        if($request->hasFile("thumbnail")){
            Storage::delete("public/thumbnail/$post->thumbnail");
            $file=$request->file("thumbnail");
            $newname="thumbnail".uniqid().".".$file->extension();
            $file->storeAs("public/thumbnail/",$newname);
            $post->thumbnail=$newname;
        }
        $post->update();

        return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {   
        $post=post::find($request->id);
        Storage::delete("public/thumbnail/$post->thumbnail");
        $post->delete();
        return redirect()->back();
    }
}
