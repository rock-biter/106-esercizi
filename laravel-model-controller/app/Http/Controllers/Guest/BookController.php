<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $title = 'ciao';

        $builder = Book::where('author', 'J. R. R. Tolkien');

        if ($title) {
            $builder->where('title', $title);
        }

        $books = $builder->orderBy('title', 'desc')->get();

        // dd($books);

        return view('book.index', compact('books'));
    }
}
