@extends('admin.layouts.master')

@section('pageTitle')
    <i class="fa fa-edit"></i> Modifier Projet
@endsection

@section('content')
    <div class="card shadow-lg border-0 mt-4">
        <div class="card-header bg-indigo-600 text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0"><i class="fa fa-edit"></i> Modifier Projet</h3>
            <a class="btn btn-warning" href="{{ route('admin.admin.projects.index') }}">
                <i class="fa fa-reply fa-fw fa-lg"></i> Retour
            </a>
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('admin.admin.projects.update', $project) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="image" class="font-weight-bold">Image</label>
                            <input type="file" name="image" id="image" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}">
                            @if ($errors->has('image'))
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                            <div class="mt-3 text-center">
                                @if($project->image)
                                    <img src="{{ asset('storage/' . $project->image) }}" alt="" class="img-fluid rounded shadow" style="max-height:220px;object-fit:contain">
                                @else
                                    <img src="{{ asset('uploads/products/default.png') }}" alt="" class="img-fluid rounded shadow" style="max-height:220px;object-fit:contain">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group mb-4">
                            <label for="name" class="font-weight-bold">Nom</label>
                            <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name', $project->name) }}">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group mb-4">
                            <label for="skills" class="font-weight-bold">Compétences</label>
                            <input type="text" name="skills" id="skills" class="form-control {{ $errors->has('skills') ? 'is-invalid' : '' }}" value="{{ old('skills', $project->skills) }}">
                            @if ($errors->has('skills'))
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $errors->first('skills') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group mb-4">
                            <label for="description" class="font-weight-bold">Description</label>
                            <textarea name="description" id="description" rows="5" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}">{{ old('description', $project->description) }}</textarea>
                            @if ($errors->has('description'))
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary px-5 py-2 font-weight-bold" style="font-size:17px">
                                <i class="fa fa-check fa-fw fa-lg"></i> Enregistrer
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
