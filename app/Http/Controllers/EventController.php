<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    // Action untuk menampilkan daftar acara
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    // Action untuk menampilkan form pembuatan acara baru
    public function create()
    {
        return view('events.create');
    }

    // Action untuk menyimpan acara baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            'location' => 'required',
        ]);

        Event::create($request->all());

        return redirect()->route('events.index')
                         ->with('success', 'Event created successfully.');
    }
}

