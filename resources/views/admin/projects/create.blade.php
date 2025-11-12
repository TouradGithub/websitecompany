@extends('layouts.admin')

@section('title', 'Ajouter un projet')

@section('content')
<div class="admin-card max-w-2xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <h3 class="text-2xl font-semibold text-gray-800">Ajouter un projet</h3>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">
            <span>&#8592;</span> Retour
        </a>
    </div>

    <form method="POST" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <div>
            <label class="form-label" for="title_fr">Titre (FR)</label>
            <input
                type="text"
                id="title_fr"
                name="title_fr"
                class="form-input @error('title_fr') border-red-500 @enderror"
                required
                value="{{ old('title_fr') }}"
            >
            @error('title_fr')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="form-label" for="description_fr">Description (FR)</label>
            <textarea
                id="description_fr"
                name="description_fr"
                class="form-input @error('description_fr') border-red-500 @enderror"
                rows="5"
                required
            >{{ old('description_fr') }}</textarea>
            @error('description_fr')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="form-label" for="image">Image</label>
            <div class="flex items-center space-x-4">
                <input
                    type="file"
                    id="image"
                    name="image"
                    class="form-input @error('image') border-red-500 @enderror"
                    required
                    accept="image/*"
                >
                <img id="image-preview" class="hidden h-20 w-20 object-cover rounded-lg">
            </div>
            @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="form-label" for="client">Client</label>
            <input
                type="text"
                id="client"
                name="client"
                class="form-input @error('client') border-red-500 @enderror"
                value="{{ old('client') }}"
            >
            @error('client')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-end space-x-4">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Annuler</a>
            <button class="btn btn-primary" type="submit">
                Créer le projet
            </button>
        </div>
    </form>
</div>

<script>
// Image preview
document.getElementById('image').addEventListener('change', function(e) {
    const preview = document.getElementById('image-preview');
    const file = e.target.files[0];

    if (file) {
        preview.classList.remove('hidden');
        preview.src = URL.createObjectURL(file);
    } else {
        preview.classList.add('hidden');
        preview.src = '';
    }
});
</script>
@endsection
