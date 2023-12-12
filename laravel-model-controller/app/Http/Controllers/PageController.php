<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // elenco dei servizi dal DB
        $books = Book::all(); // SELECT * FROM `books`
        // dd($books);

        return view('guest.index', compact('books'));
    }

    public function about()
    {
        // recuperati testi dal DB
        return view('guest.about');
    }

    public function contact()
    {

        // recuperati dati aziendali dal DB
        return view('guest.contact');
    }
}
