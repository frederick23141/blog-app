<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    //create new post
    public function create()
    {
        return view('posts.create');
    }
    //show single post
    public function show($post){
        //compat('post); ['post' => $post]
        return view("posts.show", compact('post'));
    }
}
