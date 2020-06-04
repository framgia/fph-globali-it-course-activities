<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|min:3|max:256'
        ]);

        Post::create([
            'text' => $request->text,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back();
    }

    public function edit(Post $post)
    {
        if ($post->user_id != auth()->user()->id) 
            return redirect()->back();

        return view('editpost', compact('post'));
    }

    public function update(Post $post, Request $request)
    {
        $request->validate([
            'text' => 'required|min:3|max:256'
        ]);

        $post->update([
            'text' => $request->text
        ]);

        return redirect()->route('home');
    }
}
