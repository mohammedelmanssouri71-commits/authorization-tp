<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <!-- Card -->
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">

                <!-- Title -->
                <h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-100">
                    ✍️ Créer un article
                </h1>

                <!-- Form -->
                <form action="{{ route('articles.store') }}" method="POST" class="space-y-5">
                    @csrf

                    <!-- Titre -->
                    <div>
                        <label for="titre" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Titre
                        </label>
                        <input type="text" name="titre" id="titre"
                               value="{{ old('titre') }}"
                               class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">

                        @error('titre')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Contenu -->
                    <div>
                        <label for="contenu" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Contenu
                        </label>
                        <textarea name="contenu" id="contenu" rows="5"
                                  class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('contenu') }}</textarea>

                        @error('contenu')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Statut -->
                    {{-- <div>
                        <label for="statut" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Statut
                        </label>
                        <select name="statut" id="statut"
                                class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            <option value="brouillon" {{ old('statut') == 'brouillon' ? 'selected' : '' }}>
                                Brouillon
                            </option>
                            <option value="publie" {{ old('statut') == 'publie' ? 'selected' : '' }}>
                                Publié
                            </option>
                        </select>

                        @error('statut')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div> --}}

                    <!-- Buttons -->
                    <div class="flex items-center justify-between pt-4">
                        <a href="{{ route('articles.index') }}"
                           class="text-gray-600 hover:underline dark:text-gray-300">
                            ← Retour
                        </a>

                        <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow">
                            ✅ Créer
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>