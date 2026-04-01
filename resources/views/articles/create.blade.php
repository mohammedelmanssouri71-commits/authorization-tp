{{-- @extends('layouts.app') --}}

@section('content')
<h1>Créer un article</h1>

<form action="{{ route('articles.store') }}" method="POST">
    @csrf

    <div>
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre" value="{{ old('titre') }}">
    </div>

    <div>
        <label for="contenu">Contenu</label>
        <textarea name="contenu" id="contenu">{{ old('contenu') }}</textarea>
    </div>

    <div>
        <label for="statut">Statut</label>
        <select name="statut" id="statut">
            <option value="brouillon" {{ old('statut') == 'brouillon' ? 'selected' : '' }}>Brouillon</option>
            <option value="publie" {{ old('statut') == 'publie' ? 'selected' : '' }}>Publié</option>
        </select>
    </div>

    <button type="submit">Créer</button>
</form>

<a href="{{ route('articles.index') }}">Retour à la liste</a>
@endsection