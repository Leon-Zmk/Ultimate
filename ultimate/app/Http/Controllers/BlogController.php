<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $posts=post::when(request()->search,function($query){
            $searchKey=request()->search;
            $query->where("headline","LIKE","%$searchKey%")->orWhere("description","LIKE","%$searchKey%");
        })->latest()->paginate(6);
        return view("frontend.blog",compact("posts"));
    }

    public function detail(Request $request){
        $post=post::find($request->id);
        return view("frontend.detail",compact("post"));
    }
}
