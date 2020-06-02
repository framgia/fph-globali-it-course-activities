<?php

namespace App\Http\Controllers;

use App\User;
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
        $users = User::all();
        
        return view('admin.users.index', compact('users'));
    }
}
