
@extends('Admin.layouts.master')


@section('pageTitle')
    <i class="fa fa-cog"></i> Paramètres du site
@endsection

@section('content')
<div class="container py-5" style="max-width:600px;">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-indigo-600 text-white">
            <h2 class="mb-0"><i class="fa fa-cog"></i> Paramètres du site</h2>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success mb-4">Paramètres mis à jour avec succès</div>
            @endif
            <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group mb-3">
                    <label for="name" class="font-weight-bold">Nom</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $setting->name ?? '') }}" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="description" class="font-weight-bold">Description</label>
                    <textarea name="description" id="description" required class="form-control" rows="3">{{ old('description', $setting->description ?? '') }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="logo" class="font-weight-bold">Logo</label><br>
                    @if(!empty($setting->logo))
                        <img src="{{ asset('storage/' . $setting->logo) }}" alt="Logo" class="img-thumbnail mb-2" style="max-height:80px;">
                    @endif
                    <input type="file" name="logo" id="logo" accept="image/*" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="phone" class="font-weight-bold">Téléphone</label>
                    <input type="text" name="phone" id="phone" value="{{ old('phone', $setting->phone ?? '') }}" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="whatsapp" class="font-weight-bold">WhatsApp</label>
                    <input type="text" name="whatsapp" id="whatsapp" value="{{ old('whatsapp', $setting->whatsapp ?? '') }}" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="font-weight-bold">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $setting->email ?? '') }}" required class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label for="localisation" class="font-weight-bold">Localisation</label>
                    <input type="text" name="localisation" id="localisation" value="{{ old('localisation', $setting->localisation ?? '') }}" required class="form-control">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-5 py-2 font-weight-bold"><i class="fa fa-check fa-fw fa-lg"></i> Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
