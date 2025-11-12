@extends('Admin.layouts.master')
@section('title', 'Project Details')

@section('content')
<div class="card shadow-lg border-0 mt-4 mx-auto" style="max-width:700px">
    <div class="card-header bg-indigo-600 text-white d-flex justify-content-between align-items-center">
        <h3 class="mb-0"><i class="fa fa-info-circle"></i> {{ trans('backend.project_details') }}</h3>
        <a href="{{ route('admin.admin.projects.index') }}" class="btn btn-warning"><i class="fa fa-reply fa-fw fa-lg"></i> {{ trans('backend.back') }}</a>
    </div>
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md-4 text-center">
                @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image" class="img-fluid rounded shadow" style="max-height:220px;object-fit:contain">
                @else
                    <img src="{{ asset('uploads/products/default.png') }}" alt="No image" class="img-fluid rounded shadow" style="max-height:220px;object-fit:contain">
                @endif
            </div>
            <div class="col-md-8">
                <h4 class="font-weight-bold mb-3">{{ $project->name }}</h4>
                <p><strong>{{ trans('backend.description') }}:</strong> {{ $project->description }}</p>
                <p><strong>{{ trans('backend.skills') }}:</strong> {{ $project->skills }}</p>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('admin.admin.projects.edit', $project) }}" class="btn btn-primary mx-2 px-4 font-weight-bold"><i class="fa fa-edit"></i> {{ trans('backend.edit') }}</a>
            <form method="POST" action="{{ route('admin.admin.projects.destroy', $project) }}" class="mx-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger px-4 font-weight-bold" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> {{ trans('backend.delete') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
