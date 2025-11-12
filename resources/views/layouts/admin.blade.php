<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles & Scripts -->
    @php
        $viteManifest = public_path('build/manifest.json');
    @endphp

    @if (file_exists($viteManifest))
        @vite(['resources/css/app.css'])
        @vite(['resources/js/app.js'])
    @else
        <!-- Fallback for environments without Node/Vite: use CDN Tailwind and local assets -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    @endif
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
            <a href="{{ route('admin.dashboard') }}" class="text-white flex items-center space-x-2 px-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                <span class="text-2xl font-semibold">Admin</span>
            </a>

            <nav class="space-y-2">
                <a href="{{ route('admin.dashboard') }}"
                   class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    {{ __('messages.dashboard') }}
                </a>
                <a href="{{ route('admin.services.index') }}"
                   class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    Services
                </a>
                <a href="{{ route('admin.admin.projects.index') }}"
                   class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    Projets
                </a>
                <a href="{{ route('admin.gallery.index') }}"
                   class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    Galerie
                </a>
                <a href="{{ route('home') }}"
                   class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    {{ __('messages.home') }}
                </a>
            </nav>
        </div>

        <!-- Content -->
        <div class="flex-1">
            <!-- Top Navigation -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center">
                        <h1 class="text-3xl font-bold text-gray-900">
                            @yield('title', 'Dashboard')
                        </h1>
                        <div class="flex items-center">
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit"
                                        class="text-gray-600 hover:text-gray-900">
                                    {{ __('messages.logout') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    @stack('scripts')
</body>
</html>
