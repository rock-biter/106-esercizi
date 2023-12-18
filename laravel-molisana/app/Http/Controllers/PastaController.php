<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePastaRequest;
use App\Http\Requests\UpdatePastaRequest;
use App\Models\Pasta;
use Illuminate\Http\Request;

class PastaController extends Controller
{
    public function index()
    {
        // recupera un elenco di paste
        $pastas = Pasta::all();

        // ritorna la vista che mostre l'elenco recuperato dal db
        return view('pastas.index', compact('pastas'));
    }

    // public function show($id)
    // {
    //     $pasta = Pasta::findOrFail($id);

    //     return view('pastas.show', compact('pasta'));
    // }

    public function show(Pasta $pasta)
    {
        return view('pastas.show', compact('pasta'));
    }

    public function create()
    {
        return view('pastas.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        dd($data);
    }
}
