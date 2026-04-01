<x-app-layout>
    <div class="flex items-center justify-center h-screen bg-gray-100 dark:bg-gray-900">
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-10 text-center max-w-lg">

            <h1 class="text-6xl font-bold text-red-600 mb-4">403</h1>

            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-4">
                Accès refusé
            </h2>

            <p class="text-gray-600 dark:text-gray-300 mb-6">
                Vous n'avez pas la permission de voir cette page.
            </p>

            <a href="{{ url()->previous() }}"
               class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow">
               ← Retour
            </a>
        </div>
    </div>
</x-app-layout>