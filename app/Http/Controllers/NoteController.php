<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('index', compact('notes'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'cuerpo' => 'required',
            'clasificacion' => 'required',
        ]);

        Note::create($request->all());

        return redirect()->route('notes.index')->with('success', 'Note created successfully!');
    }

    public function show(Note $note)
    {
        return view('show', compact('note'));
    }

    public function edit(Note $note)
    {
        return view('edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'cuerpo' => 'required',
            'clasificacion' => 'required',
        ]);

        $note->update($request->all());

        return redirect()->route('notes.index')->with('success', 'Note updated successfully!');
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return redirect()->route('notes.index')->with('success', 'Note deleted successfully!');
    }
}
