@extends('layouts.main-layout')
@section('content')

    <h3>Titolo: {{$comic -> title}}</h3>
    <h4>Autore: {{$comic -> author}}</h4>
    <p> Data:{{$comic -> release_date}} - Numero di pagine: {{$comic -> pages}}</p>

   <a href="{{route('home', $comic -> id) }}">
    <button>TORNA INDIETRO</button>
   </a>

    
@endsection