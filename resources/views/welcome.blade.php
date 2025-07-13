@extends('layouts.app')

@section('title', 'Accueil - Le Blog de Diaminatou')

@section('content')
    <div class="prose max-w-none">
        <h1>Bienvenue sur Le Blog de Diaminatou</h1>
        <p>Ce blog statique utilise Laravel, Blade, et le pattern MVC pour simuler un blog d'informations.</p>
        <p>Consultez la liste des <a href="{{ url('/articles') }}" class="text-blue-600 hover:underline">articles</a> pour découvrir nos contenus.</p>
    </div>
@endsection
