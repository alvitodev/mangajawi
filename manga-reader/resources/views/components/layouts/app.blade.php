<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" :class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga Reader</title>
    <link rel="icon" href="/path/to/favicon.ico">
    @vite('resources/css/app.css')
    @livewireStyles
    @vite('resources/js/app.js') <!-- Ensure Alpine.js is included via Vite -->
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300">
    <header class="bg-white dark:bg-gray-800 shadow py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-2xl font-bold">Manga Reader</h1>
            <div class="flex items-center">
                <button @click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode)"
                        class="px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded focus:outline-none transition-colors duration-300 mr-4"
                        aria-label="Toggle Dark Mode">
                    <span x-show="!darkMode">☀️ Light Mode</span>
                    <span x-show="darkMode">🌙 Dark Mode</span>
                </button>
                <img src="/path/to/profile-picture.jpg" alt="Profile Picture" class="w-10 h-10 rounded-full">
            </div>
        </div>
    </header>

    <main class="container mx-auto mt-6 px-4">
        @yield('content')
    </main>

    <footer class="bg-white dark:bg-gray-800 shadow py-4 mt-6">
        <div class="container mx-auto text-center px-4">
            <p>&copy; {{ date('Y') }} Manga Reader. All rights reserved.</p>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
