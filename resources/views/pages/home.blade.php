@extends('layouts.main-layout')
@section('content')

<h1>List:</h1>

<h3>
    <a href="{{route('create',) }}" >Crea nuovo fumetto</a>
</h3>

<ul>

@foreach ($comics as $comic)

    <li>

        <a href="{{route('show', $comic -> id) }}">
            Titolo: {{$comic -> title}} -  Autore: {{$comic -> release_date}}

        </a> <a href="{{route('edit',$comic -> id) }} ">Edit</a>

    </li>
    
@endforeach

</ul>
    
@endsection