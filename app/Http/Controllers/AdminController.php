<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function categories()
    {
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }

    public function users()
    {
        return view('admin.users.index');
    }
}
