<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white leading-tight">
            My Habits
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-purple-600 to-indigo-600 shadow-md sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-white text-lg font-semibold">Track Your Habits</h3>
                    <a href="{{ route('habits.create') }}" class="px-4 py-2 bg-yellow-400 text-black font-bold rounded-lg shadow hover:bg-yellow-500">
                        + Add Habit
                    </a>
                </div>

                @if($habits->isEmpty())
                    <p class="text-gray-200">No habits found. Start by adding a new habit!</p>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($habits as $habit)
                            <div class="bg-gray-800 text-white rounded-lg shadow-lg p-4">
                                <h4 class="text-xl font-semibold text-yellow-400">{{ $habit->name }}</h4>
                                <p class="text-gray-300 mt-2">{{ $habit->description }}</p>

                                <div class="mt-4 flex justify-between">
                                    <a href="{{ route('habits.logs', $habit->id) }}" class="text-blue-400 hover:text-blue-300">
                                        View Logs
                                    </a>
                                                <form action="{{ route('habits.track', $habit->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="date" value="{{ now()->toDateString() }}">
                    <input type="hidden" name="completed" value="1">
                    <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded-lg hover:bg-green-600">
                    ✅ Track
                    </button>
                    </form>

                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
