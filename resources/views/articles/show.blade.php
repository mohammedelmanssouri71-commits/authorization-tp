{{-- @extends('layouts.app') --}}

@section('content')
<h1>{{ $article->titre }}</h1>
<p>{{ $article->contenu }}</p>
<p>Statut : {{ $article->statut }}</p>
<p>Auteur : {{ $article->user->name }}</p>
<p>Créé le : {{ $article->created_at->format('d/m/Y H:i') }}</p>

<a href="{{ route('articles.index') }}">Retour</a>
@endsection