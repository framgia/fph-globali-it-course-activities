<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suggestion;

class SuggestionController extends Controller
{
    public function index()
    {
        return view('suggestions.index');
    }

    public function store(Request $request)
    {
        Suggestion::create([
            'content' => $request->input('content'),
            'author' => $request->input('author')
        ]);
    }
}
