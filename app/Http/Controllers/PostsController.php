<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function create(){
        return view('posts.create');
    }
    public function store(){
        $data = request()->validate([
            'title'=> 'required',
            'description'=>'required',
            'image'=>'required | image'

        ]);
        $imagePath = request('image')->store('uploads', 'public');
        auth()->user()->posts()->create([
            'title'=>$data['title'],
            'description'=>$data['description'],
            'image'=> $imagePath
        ]);
         return redirect('/player-profile/'.auth()->user()->id);
        // \App\Post::create($data);
        dd(request()->all());
        // return view('posts.create');
    }
    public function show(\App\Post $post){
        return view('posts.show', compact('post'));

    }

}
