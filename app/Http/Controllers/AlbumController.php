<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    // Menampilkan daftar album
    public function index()
    {
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }

    // Menampilkan form untuk menambahkan album baru
    public function create()
    {
        return view('albums.create');
    }

    // Menyimpan album baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'release_year' => 'required|integer',
        ]);

        Album::create($request->all());

        return redirect()->route('albums.index')->with('success', 'Album berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit album
    public function edit(Album $album)
    {
        return view('albums.edit', compact('album'));
    }

    // Memperbarui data album
    public function update(Request $request, Album $album)
    {
        $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'release_year' => 'required|integer',
        ]);

        $album->update($request->all());

        return redirect()->route('albums.index')->with('success', 'Album berhasil diperbarui.');
    }

    // Menghapus album
    public function destroy(Album $album)
    {
        $album->delete();

        return redirect()->route('albums.index')->with('success', 'Album berhasil dihapus.');
    }
}