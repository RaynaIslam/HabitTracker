<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habit Tracker</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white font-sans">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation -->
        <nav class="bg-gray-800 p-4 shadow-lg">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <h1 class="text-2xl font-bold text-white">Habit Tracker</h1>
                <a href="{{ route('habits.index') }}" class="text-gray-300 hover:text-white">My Habits</a>
            </div>
        </nav>

        <!-- Content -->
        <main class="flex-grow p-6">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 p-4 text-center text-gray-400 text-sm">
            &copy; {{ date('Y') }} Habit Tracker. All rights reserved.
        </footer>
    </div>
</body>
</html>
