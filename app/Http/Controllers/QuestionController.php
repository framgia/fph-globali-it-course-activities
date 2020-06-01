<?php

namespace App\Http\Controllers;

use App\Category;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(Category $category)
    {
        return view('admin.question.create', compact('category'));
    }

    public function store(Category $category, Request $request)
    {
        Question::create([
            'text' => $request->text,
            'category_id' => $category->id
        ]);

        return redirect()->route('admin.category.show', ['category' => $category->id]);
    }

    public function edit(Category $category, Question $question)
    {
        return view('admin.question.edit', compact('category', 'question'));
    }

    public function update(Category $category, Question $question, Request $request)
    {
        $question->update([
            'text' => $request->text
        ]);

        return redirect()->route('admin.category.show', ['category' => $category->id]);
    }

    public function destroy(Category $category, Question $question)
    {
        $question->delete();

        return redirect()->route('admin.category.show', ['category' => $category->id]);
    }
}
