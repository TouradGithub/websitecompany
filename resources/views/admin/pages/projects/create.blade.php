@extends('admin.layouts.master')

@section('pageTitle')
    <i class="fa fa-plus-circle"></i> {{ trans('backend.add') }} {{ trans('backend.projects') }}
@endsection

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('backend.enter') }} {{ trans('backend.infos') }}</h3>
            <div class="button-page-header" style="margin-top:5px">
                <a class="btn btn-block btn-warning" href="{{ route('admin.admin.projects.index') }}">
                <i class="fa fa-reply fa-fw fa-lg"></i> {{ trans('backend.back') }}</a>
            </div>
        </div>
        <div class="box-body">
            <form id="myForm" action="{{ route('admin.admin.projects.store') }}" method="POST" class="userForm" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name"><b>{{ trans('backend.name') }}</b></label>
                            <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="skills"><b>{{ trans('backend.skills') }}</b></label>
                            <input type="text" name="skills" id="skills" class="form-control {{ $errors->has('skills') ? 'is-invalid' : '' }}" value="{{ old('skills') }}">
                            @if ($errors->has('skills'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('skills') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="image"><b>Photo</b></label>
                            <input type="file" name="image" id="image" style="padding: 10px;height:45px" class="form-control image {{ $errors->has('image') ? 'is-invalid' : '' }}">
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                            <div class="imagePreview">
                                <img style="width:100%;height:250px;margin-top:5px;object-fit:contain" class="image-preview img-thumbnail" src="{{ asset('uploads/products/default.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="description"><b>Description </b></label>
                            <textarea name="description" id="description" rows="4" class="form-control">{{ old('description') }}</textarea>
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
                        <button type="submit" class="btn btn-primary btn-block" style="font-size:16px"><i class="fa fa-check fa-fw fa-lg"></i> Ajouter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
<script>
$(document).ready(function(){
    $('#description').summernote({
        height : 150
    });
    $('#myForm').validate({
       rules : {
            name : { required : true},
            description : { required : true},
            image : { required : true }
        },
        messages : {},
        errorEelement : 'span',
        errorPlacement : function(error , element){
            element.closest('.form-group').append(error);
        },
    });
});
</script>
@endpush
