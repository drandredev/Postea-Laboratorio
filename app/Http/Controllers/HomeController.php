<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('comentarios', ['post' => $post]);
    }

   


  
}

