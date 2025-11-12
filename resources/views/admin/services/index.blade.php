@extends('layouts.admin')

@section('title', __('messages.services'))

@section('content')
<div class="bg-white rounded-lg shadow p-6">
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-xl font-semibold">{{ __('messages.services') }}</h3>
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Ajouter un service</a>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
        @foreach($services as $service)
            <div class="bg-white rounded-lg shadow-sm p-4 flex flex-col items-center text-center">
                @if($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title_fr }}" class="w-28 h-28 object-cover rounded-md mb-4">
                @else
                    <div class="w-28 h-28 bg-gray-100 rounded-md mb-4 flex items-center justify-center text-gray-400">No image</div>
                @endif
                <h4 class="font-semibold text-gray-800 mb-3">{{ $service->title_fr }}</h4>
                <div class="mt-auto w-full flex justify-between">
                    <a href="{{ route('admin.services.edit', $service) }}" class="text-blue-600">Modifier</a>
                    <form action="{{ route('admin.services.destroy', $service) }}" method="POST" onsubmit="return confirm('Supprimer ce service ?')">
                        @csrf @method('DELETE')
                        <button class="text-red-600">Supprimer</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-6">{{ $services->links() }}</div>
</div>
@endsection
