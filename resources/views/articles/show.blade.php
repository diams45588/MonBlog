@extends('layouts.app')

@section('title', $article['title'])

@section('content')
    <div class="prose max-w-none">
        <h1>{{ $article['title'] }}</h1>
        <p>{{ $article['content'] }}</p>
        <a href="{{ url('/articles') }}" class="text-blue-600 hover:underline">Retour à la liste des articles</a>
    </div>
@endsection
