@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section class="py-20">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-8">
                <h2 class="text-2xl font-bold mb-4">اتصل بنا</h2>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded mb-4">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded mb-4">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="form-label">الاسم</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-input" required>
                    </div>
                    <div>
                        <label class="form-label">البريد الإلكتروني</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-input" required>
                    </div>
                    <div>
                        <label class="form-label">الموضوع (اختياري)</label>
                        <input type="text" name="subject" value="{{ old('subject') }}" class="form-input">
                    </div>
                    <div>
                        <label class="form-label">الرسالة</label>
                        <textarea name="message" rows="6" class="form-input" required>{{ old('message') }}</textarea>
                    </div>
                    <div class="flex justify-end">
                        <button class="btn btn-primary" type="submit">إرسال</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
