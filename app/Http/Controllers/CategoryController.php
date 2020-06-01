<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
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
}
