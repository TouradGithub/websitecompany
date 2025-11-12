@extends('layouts.admin')

@section('title', __('messages.dashboard'))

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <!-- Stats Card 1 -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-blue-500 bg-opacity-10">
                <svg class="h-8 w-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
            </div>
            <div class="ml-4">
                <h2 class="text-sm font-medium text-gray-600">Services</h2>
                <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\Service::count() }}</p>
            </div>
        </div>
    </div>

    <!-- Stats Card 2 -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-green-500 bg-opacity-10">
                <svg class="h-8 w-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <div class="ml-4">
                <h2 class="text-sm font-medium text-gray-600">Projets</h2>
                <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\Project::count() }}</p>
            </div>
        </div>
    </div>

    <!-- Stats Card 3 -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-yellow-500 bg-opacity-10">
                <svg class="h-8 w-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                </svg>
            </div>
            <div class="ml-4">
                <h2 class="text-sm font-medium text-gray-600">Projets en vedette</h2>
                <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\Project::where('is_featured', true)->count() }}</p>
            </div>
        </div>
    </div>

    <!-- Stats Card 4 -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-purple-500 bg-opacity-10">
                <svg class="h-8 w-8 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
            </div>
            <div class="ml-4">
                <h2 class="text-sm font-medium text-gray-600">Utilisateurs</h2>
                <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\User::count() }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity Section -->
<div class="mt-8">
    <h3 class="text-lg font-medium text-gray-900 mb-4">Activité récente</h3>
    <div class="bg-white shadow rounded-lg">
        <div class="p-6">
            <div class="flow-root">
                <ul class="-mb-8">
                    @foreach(\App\Models\Project::latest()->take(5)->get() as $project)
                        <li class="mb-6">
                            <div class="relative pb-8">
                                <div class="relative flex items-start space-x-3">
                                    <div class="min-w-0 flex-1">
                                        <div class="text-sm leading-5 font-medium text-gray-900">
                                            {{ $project->title_fr }}
                                        </div>
                                        <div class="mt-1 text-sm leading-5 text-gray-500">
                                            Ajouté le {{ $project->created_at->format('d/m/Y') }}
                                        </div>
                                    </div>
                                    <div class="min-w-0 flex-shrink-0">
                                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                            {{ $project->category }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="mt-8">
    <h3 class="text-lg font-medium text-gray-900 mb-4">Actions rapides</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <a href="{{ route('admin.services.create') }}" class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition duration-200">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-500 bg-opacity-10">
                    <svg class="h-6 w-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h4 class="text-base font-medium text-gray-900">Ajouter un service</h4>
                    <p class="text-sm text-gray-500">Créer un nouveau service</p>
                </div>
            </div>
        </a>

        <a href="{{ route('admin.projects.create') }}" class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition duration-200">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-500 bg-opacity-10">
                    <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h4 class="text-base font-medium text-gray-900">Ajouter un projet</h4>
                    <p class="text-sm text-gray-500">Créer un nouveau projet</p>
                </div>
            </div>
        </a>

        <a href="{{ route('admin.services.index') }}" class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition duration-200">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-500 bg-opacity-10">
                    <svg class="h-6 w-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h4 class="text-base font-medium text-gray-900">Gérer les services</h4>
                    <p class="text-sm text-gray-500">Voir tous les services</p>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
