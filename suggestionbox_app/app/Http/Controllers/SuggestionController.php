<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suggestion;

class SuggestionController extends Controller
{
    public function index()
    {
        $suggestions = Suggestion::all();

        return view('suggestions.index', compact('suggestions'));
    }

    public function store(Request $request)
    {
        Suggestion::create([
            'content' => $request->input('content'),
            'author' => $request->input('author')
        ]);
    }
}
