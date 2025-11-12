
@extends('Admin.layouts.master')

@section('pageTitle')
	<i class="fa fa-edit"></i> Modifier Service
@endsection

@section('content')
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Modifier Service</h3>
			<div class="button-page-header" style="margin-top:5px">
				<a class="btn btn-block btn-warning" href="{{ route('admin.services.index') }}">
				<i class="fa fa-reply fa-fw fa-lg"></i> Retour</a>
			</div>
		</div>
		<div class="box-body">
			@if($errors->any())
				<div class="bg-red-100 text-red-800 p-3 rounded mb-4">
					<ul class="list-disc pl-5">
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<form method="POST" action="{{ route('admin.services.update', $service) }}" class="userForm" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="name"><b>Nom</b></label>
							<input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name', $service->name) }}">
							@if ($errors->has('name'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="icon"><b>Icône</b></label>
							<input type="text" name="icon" id="icon" class="form-control {{ $errors->has('icon') ? 'is-invalid' : '' }}" value="{{ old('icon', $service->icon) }}">
							@if ($errors->has('icon'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('icon') }}</strong>
								</span>
							@endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="image"><b>Image</b></label>
							<input type="file" name="image" id="image" style="padding: 10px;height:45px" class="form-control image {{ $errors->has('image') ? 'is-invalid' : '' }}">
							@if ($errors->has('image'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('image') }}</strong>
								</span>
							@endif
							<div class="imagePreview">
								@if($service->image)
									<img style="width:100%;height:250px;margin-top:5px;object-fit:contain" class="image-preview img-thumbnail" src="{{ asset('storage/' . $service->image) }}" alt="">
								@else
									<img style="width:100%;height:250px;margin-top:5px;object-fit:contain" class="image-preview img-thumbnail" src="{{ asset('uploads/products/default.png') }}" alt="">
								@endif
							</div>
						</div>
					</div>
					<div class="col-md-9">
						<div class="form-group">
							<label for="description"><b>Description</b></label>
							<textarea name="description" id="description" rows="4" class="form-control">{{ old('description', $service->description) }}</textarea>
							@if ($errors->has('description'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('description') }}</strong>
								</span>
							@endif
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="text-center" style="margin-top:30px">
						<button type="submit" class="btn btn-primary btn-block" style="font-size:16px"><i class="fa fa-check fa-fw fa-lg"></i> Enregistrer</button>
					</div>
				</div>
			</form>
			<form method="POST" action="{{ route('admin.services.destroy', $service) }}" class="mt-3 text-center">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ?')"><i class="fa fa-trash"></i> Supprimer</button>
			</form>
		</div>
	</div>
@endsection
