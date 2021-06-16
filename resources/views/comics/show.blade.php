@extends('layouts.app')

@section('main_content')

<div class="comics-container">
    
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
            
            <div class="row-title">Publisher:</div>

            <div>{{ $comic->publisher }}</div>

        </div>

        <div class="card-row">
            
            <div class="row-title">Vote:</div>

            <div>{{ $comic->vote }}</div>

        </div>

        <div class="card-row">
            
            <div class="row-title">Price:</div>

            <div>{{ $comic->price }} €</div>

        </div>

        <div class="card-row">
            <a href="{{ route('comics.index') }}">Torna all'elenco fumetti</a>
        </div>

        <div class="card-row">
            <a href="{{ route('comics.edit', $comic->id) }}">Modifica Fumetto</a>
        </div>

        
    </div>

</div>


@endsection