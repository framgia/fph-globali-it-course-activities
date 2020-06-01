<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        Category::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        
        return redirect()->route('admin.categories');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(Category $category, Request $request)
    {
        $category->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('admin.categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories');
    }
}
