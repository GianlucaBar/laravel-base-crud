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

        {{-- tasto detagli  --}}
        <div class="card-row">
            <a href="{{ route('comics.show', $comic->id) }}">Vedi dettaglio fumetto</a>
        </div>

        {{-- tasto modifica  --}}
        <div class="card-row">
            <a href="{{ route('comics.edit', $comic->id) }}">Modifica Fumetto</a>
        </div>

        {{-- tasto elimina  --}}
        <div class="card-row">
            <form action="{{ route('comics.destroy', [
                'comic' => $comic->id
            ]) }} " method="post">
            
            @csrf
            @method('DELETE')

            <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger" value="elimina">
            </form>
        </div>
    </div>   
    @endforeach
</div>


@endsection