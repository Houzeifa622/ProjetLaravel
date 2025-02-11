<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $posts = ["un post","dexu posts","trois posts"];
        return view('post',compact('posts'));
    }
}
