<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{


    public function index()
    {
        return Book::all();
    }


    public function store(Request $request)
    {
        $book = new Book();
        $book->name = $request->name;
        $book->pages = $request->pages;
        $book->save();
    }


    public function show($id)
    {
        return Book::find($id);
    }


    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->update($request->all());
        return true;
    }

    public function updatePagesRead(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->pages_read = $request->pages_read;
        return $book->save();
    }


    public function destroy($id)
    {
        Book::destroy($id);
    }
}
