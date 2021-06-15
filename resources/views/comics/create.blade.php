@extends('layouts.app')

@section('main_content')
<div class="container form_container">
    <h2>Aggiungi un fumetto alla collezione</h2>

    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="name">Titolo</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="publisher">Tipo</label>
            <input type="text" class="form-control" name="publisher" id="publisher" value="{{ old('publisher') }}">
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}">
        </div>

        <div class="form-group">
            <label for="vote">Voto da 1 a 10</label>
            <input type="text" class="form-control" name="vote" id="vote" value="{{ old('vote') }}">
        </div>

        <input type="submit" class="btn btn-primary" value="Invia">
    </form>
</div>
@endsection