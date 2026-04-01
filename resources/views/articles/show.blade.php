<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <!-- Card -->
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 space-y-6">

                <!-- Title -->
                <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
                    {{ $article->titre }}
                </h1>

                <!-- Metadata -->
                <div class="flex flex-wrap gap-4 text-sm text-gray-500 dark:text-gray-400">
                    <span>
                        Statut : 
                        <span>
                            {{ $article->statut }}
                        </span>
                    </span>
                    <span>Auteur : {{ $article->user->name }}</span>
                    <span>Créé le : {{ $article->created_at->format('d/m/Y H:i') }}</span>
                </div>

                <!-- Content -->
                <div class="prose dark:prose-dark max-w-full">
                    <p>{{ $article->contenu }}</p>
                </div>

                <!-- Back button -->
                <a href="{{ route('articles.index') }}"
                   class="inline-block mt-4 text-blue-600 hover:underline dark:text-blue-400">
                   ← Retour à la liste
                </a>

            </div>
        </div>
    </div>
</x-app-layout>