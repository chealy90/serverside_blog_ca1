<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class UserController extends Controller
{
    //
    public function showProfile(){
        $user = auth()->user();
        $posts = Post::where('user_id', auth()->id())->get();
        return view('profile', compact('user', 'posts'));
    }

    public function getAllPosts($id){
        return Post::find();
    }
}
