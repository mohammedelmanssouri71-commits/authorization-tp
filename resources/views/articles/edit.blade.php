{{-- @extends('layouts.app') --}}

@section('content')
<h1>Modifier l'article</h1>

<form action="{{ route('articles.update', $article) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre" value="{{ old('titre', $article->titre) }}">
    </div>

    <div>
        <label for="contenu">Contenu</label>
        <textarea name="contenu" id="contenu">{{ old('contenu', $article->contenu) }}</textarea>
    </div>

    <div>
        <label for="statut">Statut</label>
        <select name="statut" id="statut">
            <option value="brouillon" {{ (old('statut', $article->statut) == 'brouillon') ? 'selected' : '' }}>Brouillon</option>
            <option value="publie" {{ (old('statut', $article->statut) == 'publie') ? 'selected' : '' }}>Publié</option>
        </select>
    </div>

    <button type="submit">Mettre à jour</button>
</form>

<a href="{{ route('articles.index') }}">Retour à la liste</a>
@endsection