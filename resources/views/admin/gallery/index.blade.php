@extends('layouts.admin')

@section('title', 'معرض الصور')

@section('content')
<div class="bg-white rounded-lg shadow p-6">
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-xl font-semibold">معرض الصور</h3>
    </div>

    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data" class="mb-6">
        @csrf
        <div class="flex items-center gap-4">
            <input type="file" name="image" accept="image/*" required class="form-input">
            <button class="btn btn-primary" type="submit">رفع الصورة</button>
        </div>
    </form>

    <div class="grid md:grid-cols-4 gap-4">
        @forelse($gallery as $file)
            <div class="bg-gray-50 rounded p-2 text-center">
                <img src="{{ asset('storage/gallery/' . $file) }}" alt="{{ $file }}" class="w-full h-40 object-cover rounded mb-2 cursor-pointer admin-gallery-thumb">
                <form action="{{ route('admin.gallery.destroy', ['filename' => $file]) }}" method="POST" onsubmit="return confirm('Supprimer cette image ?')">
                    @csrf @method('DELETE')
                    <button class="text-red-600">حذف</button>
                </form>
            </div>
        @empty
            <div class="col-span-4 text-center text-gray-500">لا توجد صور في المعرض</div>
        @endforelse
    </div>

    <div id="admin-img-modal" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden">
        <img id="admin-modal-img" src="" alt="Preview" class="rounded-lg shadow-2xl max-w-full max-h-full">
    </div>

    @push('scripts')
    <script>
        document.querySelectorAll('.admin-gallery-thumb').forEach(img => {
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
