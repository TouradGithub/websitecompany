@extends('admin.layouts.master')
@section('pageTitle') <i class="fa fa-shopping-bag"></i> Services @endsection
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title" style="padding:10px">
                Liste des services
            </h3>

            <div class="button-page-header">
                <a class="btn btn-block btn-primary" href="{{ route('admin.services.create') }}">
                <i class="fa fa-plus-circle fa-fw fa-lg"></i> Ajouter un service</a>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table id="products-table" class="table table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><b>Nom</b></th>
                            <th><b>Description</b></th>
                            <th><b>Image</b></th>
                            <th width="8%"><b>Gérer</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->description }}</td>
                                <td>
                                    @if($service->image)
                                        <img src="{{ asset('storage/' . $service->image) }}" style="max-width:100px">
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm btn-info" >
                                        <i class="fa fa-edit fa-lg"></i>
                                    </a>
                                      <form method="POST" action="{{ route('admin.services.destroy', $service) }}" style="display:inline-block">
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
        </div>
    </div>
@endsection
