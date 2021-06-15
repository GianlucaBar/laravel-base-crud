@extends('layouts.app')

@section('main_content')
    <div class="home-title">
        <h2>I fumetti della nostra collezione</h2>
        <a class="btn btn-primary" href="{{route('comics.index')}}">LISTA COMPLETA  </a>
    </div>
@endsection
