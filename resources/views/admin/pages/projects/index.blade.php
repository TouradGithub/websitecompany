@extends('admin.layouts.master')
@section('pageTitle') <i class="fa fa-folder-open"></i> les projects @endsection

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title" style="padding:10px">
               Les Projects
            </h3>
            <div class="button-page-header">
                <a class="btn btn-block btn-primary" href="{{ route('admin.admin.projects.create') }}">
                <i class="fa fa-plus-circle fa-fw fa-lg"></i>Nouvelle projects</a>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table id="projects-table" class="table table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><b>Nom</b></th>
                            <th><b>Description</b></th>
                            <th><b>Photo</b></th>
                            <th width="8%"><b>Actions</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{!! $project->description !!}</td>
                                <td>
                                    @if($project->image)
                                        <img src="{{ asset('storage/' . $project->image) }}" style="max-width:100px">
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.admin.projects.edit', $project) }}" class="btn btn-sm btn-info" >
                                        <i class="fa fa-edit fa-lg"></i>
                                    </a>
                                    <a href="{{ route('admin.admin.projects.show', $project) }}" class="btn btn-sm btn-primary" >
                                        <i class="fa fa-eye fa-lg"></i>
                                    </a>
                                    <form method="POST" action="{{ route('admin.admin.projects.destroy', $project) }}" style="display:inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                            <i class="fa fa-trash fa-lg"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-6">{{ $projects->links() }}</div>
        </div>
    </div>
@endsection
