@extends('layouts.master')

@section('titulo', 'Practica1')

@section('contenido')
    
    <h1>Bienvenidos al curso</h1>

    @foreach($posts as $post)
        <h3>{{$post->title}}</h3>
        <p>{{$post->description}}</p>
    @endforeach

@endsection