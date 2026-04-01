<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <h1>Articles</h1>
        <a href="{{ route('articles.create') }}">Créer un article</a>

        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif

    <ul>
        @forelse($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article) }}">{{ $article->titre }}</a>
                - {{ $article->statut }}
                <a href="{{ route('articles.edit', $article) }}">Éditer</a>

                <form action="{{ route('articles.destroy', $article) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @empty
            <p>Pas d'articles</p>
        @endforelse
    </ul>
    </div>
</x-app-layout>
