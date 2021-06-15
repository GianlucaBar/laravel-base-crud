@extends('layouts.app')

@section('main_content')

<div class="comics-container">
    @foreach ($comics as $comic)
    <div class="comic-card">
        <h2>{{ $comic->name }}</h2>

        <div class="card-row">

            <div class="row-title">Title:</div>

            <div>{{ $comic->name }}</div>

        </div>

        <div class="card-row">
            
            <div class="row-title">Description:</div>

            <div>{{ $comic->description }} </div>
        </div>

        <div class="card-row">
            <a href="{{ route('comics.show', $comic->id) }}">Vedi dettaglio fumetto</a>
        </div>
    </div>   
    @endforeach
</div>


@endsection