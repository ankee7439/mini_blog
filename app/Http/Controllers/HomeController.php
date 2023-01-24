<?php

namespace App\Http\Controllers;
use App\Models\Post;
// use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show_all(){
        // $post = Post::paginate(3);
        $post = Post::all();
        return view('home',['posts'=>$post]);
    }
}
