<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePastaRequest;
use App\Http\Requests\UpdatePastaRequest;
use App\Models\Pasta;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function store(StorePastaRequest $request) //al posto della classe Request
    {
        // $request->validate([
        //     'title' => 'required|max:100|min:5',
        //     'type' => [
        //         'required',
        //         'max:50',
        //         // 'in:lunga,corta,cortissima,brodo'
        //         Rule::in(['lunga', 'corta', 'cortissima', 'brodo'])
        //     ],
        //     // 'image' => 'required|max:255|url',
        //     'image' => ['required', 'max:255', 'url'],
        //     'cooking_time' => 'required|max:20|min:4',
        //     'weight' => 'required|max:20|min:3',
        //     'description' => 'nullable|min:5'
        // ]);
        $data = $request->validated();

        // Validazion dei dati che arrivano dagli utenti brutti e puzzoni

        // dd($data);
        // $new_pasta = new Pasta();
        // $new_pasta->title = $data['title'];
        // $new_pasta->type = $data['type'];
        // $new_pasta->image = $data['image'];
        // $new_pasta->cooking_time = $data['cooking_time'];
        // $new_pasta->weight = $data['weight'];
        // $new_pasta->description = $data['description'];

        // $new_pasta->save();
        $new_pasta = Pasta::create($data);

        return redirect()->route('pastas.show', $new_pasta);
    }

    public function edit(Pasta $pasta)
    {
        return view('pastas.edit', compact('pasta'));
    }

    public function update(Request $request, Pasta $pasta)
    {
        $request->validate([
            'title' => 'required|max:100|min:5',
            'type' => [
                'required',
                'max:50',
                // 'in:lunga,corta,cortissima,brodo'
                Rule::in(['lunga', 'corta', 'cortissima', 'brodo'])
            ],
            // 'image' => 'required|max:255|url',
            'image' => ['required', 'max:255', 'url'],
            'cooking_time' => 'required|max:20|min:4',
            'weight' => 'required|max:20|min:3',
            'description' => 'nullable|min:5'
        ]);
        $data = $request->all();


        $pasta->update($data);
        // $pasta->fill($data); //non salva i dati come update

        // $pasta->title = $data['title'];
        // $pasta->type = $data['type'];
        // $pasta->weight = $data['weight'];
        // ...
        // $pasta->save();

        // dd($data, $pasta);
        return redirect()->route('pastas.show', $pasta);
        // return back(); 
    }

    public function destroy(Pasta $pasta)
    {
        $pasta->delete();

        return redirect()->route('pastas.index');
    }
}
