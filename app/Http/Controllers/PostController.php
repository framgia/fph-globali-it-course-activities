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
}
