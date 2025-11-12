@extends('layouts.admin')

@section('title', 'Modifier le projet')

@section('content')
<div class="bg-white rounded-lg shadow p-6 max-w-2xl">
    <h3 class="text-xl font-semibold mb-4">Modifier le projet</h3>

    <form method="POST" action="{{ route('admin.projects.update', $project) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="form-label">Titre (FR)</label>
            <input type="text" name="title_fr" class="form-input" value="{{ $project->title_fr }}" required>
        </div>
        <div class="mb-4">
            <label class="form-label">Description (FR)</label>
            <textarea name="description_fr" class="form-input" rows="5" required>{{ $project->description_fr }}</textarea>
        </div>
        <div class="mb-4">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-input">
            @if($project->image)
                <div class="mt-2"><img src="{{ asset('storage/' . $project->image) }}" style="max-width:200px"></div>
            @endif
        </div>
        <div class="mb-4">
            <label class="form-label">Client</label>
            <input type="text" name="client" class="form-input" value="{{ $project->client }}">
        </div>
        <div class="flex items-center justify-between">
            <button class="btn btn-primary" type="submit">Enregistrer</button>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Annuler</a>
        </div>
    </form>
</div>
@endsection
