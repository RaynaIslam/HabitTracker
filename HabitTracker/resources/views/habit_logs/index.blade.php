<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Habit Logs for {{ $habit->name }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 shadow-sm sm:rounded-lg p-6">
                @foreach ($habitLogs as $log)
                    <div class="p-4 mb-2 bg-gray-700 rounded-lg flex justify-between">
                        <span>{{ $log->date }} - {{ $log->completed ? '✅ Completed' : '❌ Not Completed' }}</span>
                        <form action="{{ route('habitLog.destroy', $log->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400 hover:text-red-600">Delete</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

