@extends('layouts.app')

@section('title', 'Page non trouvée')

@section('content')
    <h1>404 - Page non trouvée</h1>
    <p>Désolé, la page que vous recherchez n'existe pas.</p>
    <a href="{{ url('/articles') }}">Retour à la liste des articles</a>
@endsection