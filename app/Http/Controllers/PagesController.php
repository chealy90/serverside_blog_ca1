<?php

namespace App\Http\Controllers;
use App\Models\Post;


use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::take(3)->get(); // Fetch all posts
    
        return view('index', compact('posts'));
    }
}
