@extends('layout')

@section('content')
    <h1>{{ $note->titulo }}</h1>
    <p>{{ $note->autor }}</p>
    <p>{{ $note->fecha }}</p>
    <p>{{ $note->hora }}</p>
    <p>{{ $note->cuerpo }}</p>
    <p>{{ $note->clasificacion }}</p>
    <a href="{{ route('notes.index') }}">Back</a>
@endsection
