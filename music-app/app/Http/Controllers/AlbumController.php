<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::with('artist')->get();
        return view('albums.index', compact('albums'));
    }

    public function create()
    {
        $artists = Artist::all();
        return view('albums.create', compact('artists'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|string|max:255',
            'year'      => 'nullable|integer|min:1900|max:2099',
            'artist_id' => 'required|exists:artists,id',
        ]);

        Album::create($request->only('title', 'year', 'artist_id'));

        return redirect()->route('albums.index')->with('success', 'Álbum cadastrado com sucesso!');
    }
}
