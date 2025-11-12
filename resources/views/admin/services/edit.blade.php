@extends('layouts.admin')

@section('title', 'Modifier le service')

@section('content')
<div class="bg-white rounded-lg shadow p-6 max-w-2xl">
    <h3 class="text-xl font-semibold mb-4">Modifier le service</h3>

    <form method="POST" action="{{ route('admin.services.update', $service) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="form-label">Titre (FR)</label>
            <input type="text" name="title_fr" class="form-input" value="{{ $service->title_fr }}" required>
        </div>
        <div class="mb-4">
            <label class="form-label">Description (FR)</label>
            <textarea name="description_fr" class="form-input" rows="5" required>{{ $service->description_fr }}</textarea>
        </div>
        <div class="mb-4">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-input">
            @if($service->image)
                <div class="mt-2"><img src="{{ asset('storage/' . $service->image) }}" style="max-width:200px"></div>
            @endif
        </div>
        <div class="flex items-center justify-between">
            <button class="btn btn-primary" type="submit">Enregistrer</button>
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Annuler</a>
        </div>
    </form>
</div>
@endsection
