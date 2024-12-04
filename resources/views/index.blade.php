@extends('layout')

@section('content')
    <h1>Notes</h1>
    <a href="{{ route('notes.create') }}">Create Note</a>
    @foreach ($notes as $note)
        <div>
            <h2>{{ $note->titulo }}</h2>
            <a href="{{ route('notes.show', $note) }}">View</a>
            <a href="{{ route('notes.edit', $note) }}">Edit</a>
            <form action="{{ route('notes.destroy', $note) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection