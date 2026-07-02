<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::all();
        return view('artists.index', compact('artists'));
    }

    public function create()
    {
        return view('artists.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'genre' => 'nullable|string|max:255',
        ]);

        Artist::create($request->only('name', 'genre'));

        return redirect()->route('artists.index')->with('success', 'Artista cadastrado com sucesso!');
    }
}
