@extends('layout')

@section('content')
    <h1>Edit Note</h1>
    <form action="{{ route('notes.update', $note) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Titulo:</label>
        <input type="text" name="titulo" value="{{ $note->titulo }}" required>
        <label>Autor:</label>
        <input type="text" name="autor" value="{{ $note->autor }}" required>
        <label>Fecha:</label>
        <input type="text" name="fecha" value="{{ $note->fecha }}" required>
        <label>Hora:</label>
        <input type="text" name="hora" value="{{ $note->hora }}" required>
        <label>Clasificacion:</label>
        <input type="text" name="hora" value="{{ $note->clasificacion }}" required>
        <label>Cuerpo:</label>
        <textarea name="cuerpo" required>{{ $note->cuerpo }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection
