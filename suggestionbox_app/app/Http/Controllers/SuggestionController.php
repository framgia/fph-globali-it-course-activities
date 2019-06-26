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

    public function create()
    {
        return view('suggestions.create');
    }

    public function store(Request $request)
    {
        Suggestion::create([
            'content' => $request->input('content'),
            'author' => $request->input('author')
        ]);
    }

    public function edit($id)
    {
        $suggestion = Suggestion::find($id);

        return view('suggestions.edit', compact('suggestion'));
    }

    public function update(Request $request, $id)
    {
        $suggestion = Suggestion::find($id);
        $suggestion->update([
            'content' => $request->input('content'),
            'author' => $request->input('author')
        ]);

        return redirect()->route('suggestions.index');
    }
}
