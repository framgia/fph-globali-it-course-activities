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
}
