@extends('layouts.app')

@section('main_content')
<div class="container form_container">
    <h2>Modifica Fumetto</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.update', [
        'comic' => $comic->id
    ]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Titolo</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $comic->name }}">
        </div>

        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ $comic->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" class="form-control" name="publisher" id="publisher" value="{{ $comic->publisher }}">
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price" value="{{ $comic->price }}">
        </div>

        <div class="form-group">
            <label for="vote">Voto da 1 a 10</label>
            <input type="text" class="form-control" name="vote" id="vote" value="{{ $comic->vote }}">
        </div>

        <input type="submit" class="btn btn-primary" value="Invia">
    </form>
</div>
@endsection