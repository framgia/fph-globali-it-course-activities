<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function categories()
    {
        return view('admin.category.categories');
    }

    public function users()
    {
        return view('admin.users');
    }
}
