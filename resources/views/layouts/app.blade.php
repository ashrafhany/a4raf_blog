<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'My Personal Blog')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Figtree', sans-serif;
        }
    </style>
    @stack('styles')
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900">
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-6">
            <nav class="flex justify-between items-center">
                <div>
                    <a href="{{ route('home') }}" class="text-xl font-bold text-blue-600">Ashraf's Blog</a>
                </div>
                <div class="flex gap-6">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">Home</a>
                    <a href="{{ route('posts.index') }}" class="text-gray-700 hover:text-blue-600">Blog</a>
                    <a href="{{ route('projects.index') }}" class="text-gray-700 hover:text-blue-600">Projects</a>
                    <a href="{{ route('resume.show') }}" class="text-gray-700 hover:text-blue-600">Resume</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">Ashraf Hany</h3>
                    <p class="text-gray-300">Back End Developer (Laravel/PHP)</p>
                    <p class="text-gray-300 mt-2">Personal website showcasing my work, skills, and blog posts</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Me</h3>
                    <div class="flex flex-col text-gray-300">
                        <a href="mailto:ashrafhany283@gmail.com.com" class="hover:text-white mb-2">ashrafhany283@gmail.com</a>
                        <a href="https://www.linkedin.com/in/ashraf-hany-080567247" target="_blank" class="hover:text-white mb-2">LinkedIn</a>
                        <a href="https://github.com/ashraf-hany" target="_blank" class="hover:text-white mb-2">GitHub</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} All Rights Reserved</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
