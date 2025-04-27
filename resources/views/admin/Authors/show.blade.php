@extends('layouts.app')

@section('title', 'Autores')

@section('content')

    <div id="content">
        @if ($author->image)
            <img src="{{ $product->image_url }}">
        @else
            Sin imagen
        @endif

        <h1>{{ $author->name . '  ' . $author->lastname }}</h1>
        <p><strong>Descripción:</strong> {{ $author->description }}</p>
        
        <br>

        <a href="{{ route('authors.index') }}" class="btn btn-secondary">Volver</a>
    </div>

@endsection