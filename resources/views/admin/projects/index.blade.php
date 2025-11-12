@extends('layouts.admin')

@section('title', __('messages.projects'))

@section('content')
<div class="bg-white rounded-lg shadow p-6">
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-xl font-semibold">{{ __('messages.projects') }}</h3>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Ajouter un projet</a>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
        @foreach($projects as $project)
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title_fr }}" class="w-full h-56 object-cover cursor-pointer project-thumb">
                @else
                    <div class="w-full h-56 bg-gray-100 flex items-center justify-center text-gray-400">No image</div>
                @endif
                <div class="p-4">
                    <h4 class="text-lg font-bold text-gray-800">{{ $project->title_fr }}</h4>
                    @if($project->client)
                        <div class="text-sm text-gray-500 mb-2">{{ $project->client }}</div>
                    @endif
                    <p class="text-gray-600">{{ Str::limit($project->description_fr, 180) }}</p>
                    <div class="mt-4 flex justify-between">
                        <a href="{{ route('admin.projects.edit', $project) }}" class="text-blue-600">Modifier</a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Supprimer ce projet ?')">
                            @csrf @method('DELETE')
                            <button class="text-red-600">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-6">{{ $projects->links() }}</div>

    <div id="admin-img-modal" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden">
        <img id="admin-modal-img" src="" alt="Preview" class="rounded-lg shadow-2xl max-w-full max-h-full">
    </div>

    @push('scripts')
    <script>
        document.querySelectorAll('.project-thumb').forEach(img => {
            img.addEventListener('click', () => {
                document.getElementById('admin-modal-img').src = img.src;
                document.getElementById('admin-img-modal').classList.remove('hidden');
            });
        });
        document.getElementById('admin-img-modal').addEventListener('click', () => {
            document.getElementById('admin-img-modal').classList.add('hidden');
        });
    </script>
    @endpush
</div>
@endsection
