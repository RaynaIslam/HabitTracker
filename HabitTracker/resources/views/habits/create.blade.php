<x-app-layout>
    <div class="max-w-lg mx-auto mt-10 bg-gray-800 p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-white mb-4">Add a New Habit</h2>

        <form action="{{ route('habits.store') }}" method="POST">
            @csrf

            <label class="block text-gray-300 text-sm">Habit Name</label>
            <input type="text" name="name" class="w-full p-2 rounded bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-blue-500 mb-4" required>

            <label class="block text-gray-300 text-sm">Frequency</label>
            <input type="text" name="frequency" class="w-full p-2 rounded bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-blue-500 mb-4" required>

            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg shadow-md">
                Save Habit
            </button>
        </form>
    </div>
</x-app-layout>
