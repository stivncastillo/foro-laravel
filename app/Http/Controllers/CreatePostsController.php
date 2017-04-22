<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CreatePostsController extends Controller
{
    public function create()
    {
    	return view('posts.create');
    }

    public function store(Request $request)
    {
    	$post = new Post($request->all());

    	auth()->user()->posts()->save($post);
    	
    	return $post;
    }
}