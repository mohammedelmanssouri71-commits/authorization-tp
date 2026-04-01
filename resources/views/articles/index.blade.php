<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">
                    📚 Articles
                </h1>

                <a href="{{ route('articles.create') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow">
                    + Créer un article
                </a>
            </div>

            <!-- Success message -->
            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Articles list -->
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">
                <ul class="space-y-4">

                    @forelse($articles as $article)
                        <li class="flex justify-between items-center border-b pb-3">

                            <!-- Info -->
                            <div>
                                <a href="{{ route('articles.show', $article) }}"
                                   class="text-lg font-semibold text-blue-600 hover:underline">
                                    {{ $article->titre }}
                                </a>

                                <p class="text-sm text-gray-500">
                                    Statut :
                                    <span>
                                        {{ $article->statut }}
                                    </span>
                                </p>
                            </div>

                            <!-- Actions -->
                            <div class="flex items-center space-x-2">

                                @if ($article->statut === "brouillon")
                                    <form action="{{ route('check', $article) }}" method="POST"
                                      onsubmit="return confirm('Valider cet article ?')">
                                        @csrf
                                        @method('PUT')

                                        <button type="submit"
                                                class="px-3 py-1 bg-red-500 hover:bg-red-600 rounded">
                                            ✔
                                        </button>
                                    </form>
                                @else
                                     @can('update', $article)
                                        <a href="{{ route('articles.edit', $article) }}"
                                        class="px-3 py-1 bg-yellow-400 hover:bg-yellow-500 text-white rounded">
                                            ✏️
                                        </a>
                                    @endcan
                                @endif
                                
                                @can('delete', $article)
                                        <form action="{{ route('articles.destroy', $article) }}" method="POST"
                                        onsubmit="return confirm('Supprimer cet article ?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="px-3 py-1 bg-red-500 hover:bg-red-600 text-white rounded">
                                                🗑️
                                            </button>
                                        </form>
                                @endcan
                            

                            </div>
                        </li>

                    @empty
                        <p class="text-center text-gray-500">
                            Aucun article trouvé 😢
                        </p>
                    @endforelse

                </ul>
            </div>

        </div>
    </div>
</x-app-layout>
