@extends('layout')

@section('content')
    <h1>Create Note</h1>
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <label>Titulo</label>
        <input type="text" name="titulo" required>
        <label>Autor</label>
        <input type="text" name="autor" required>
        <label>Fecha</label>
        <input type="date" name="fecha" required>
        <label>Hora</label>
        <input type="time" name="hora" required>
        <label>Cuerpo:</label>
        <textarea name="cuerpo" required></textarea>
        <label>Clasificacion</label>
        <input type="text" name="clasificacion" required>
        <button type="submit">Save</button>
    </form>
@endsection