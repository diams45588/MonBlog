@extends('layouts.app')

@section('title', 'Liste des Articles')

@section('content')
    <div class="prose max-w-none">
        <h1>Articles</h1>
        <ul class="list-disc list-inside">
            @foreach ($articles as $article)
                <li>
                    <a href="{{ url('/articles/' . $article['slug']) }}" class="text-blue-600 hover:underline">{{ $article['title'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
