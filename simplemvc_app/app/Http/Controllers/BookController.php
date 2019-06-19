<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all(); // get all the books

        // return the blade file with the $books variable
        return view('index', compact('books'));
    }

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

    public function show($id)
    {
        // get the book with given id parameter
        $book = Book::find($id);

        return view('show', compact('book'));
    }

    public function edit($id)
    {
        // get the book with given id parameter
        $book = Book::find($id);

        // then return the blade file with the $book variable
        return view('edit', compact('book'));
    }
}
