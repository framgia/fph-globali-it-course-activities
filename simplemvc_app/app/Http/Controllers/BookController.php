<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function create()
    {

        // just return the blade file
        return view('create');
    }

    public function store(Request $request)
    {
        // create a new book object
        $book = new Book();
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->save(); // save the values to DB
    }
}
