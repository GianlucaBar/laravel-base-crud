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

        <div class="card-row">
            <button id="toggle" class="btn btn-danger">Elimina</button>

            <div id="popup">

                <div class="warning">Sei sicuro di voler eliminare l'elemento?</div>
                <form action="{{ route('comics.destroy', [
                        'comic' => $comic->id
                    ]) }} " method="post">
                    
                    @csrf
                    @method('DELETE')
        
                    <input type="submit" class="btn btn-danger" value="elimina">
                </form>
                <button id="toggle" class="btn btn-danger">NO</button>
            </div>
        </div>
    </div>   
    @endforeach

</div>


@endsection