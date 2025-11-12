@extends('admin.layouts.master')



@section('pageTitle')
    <i class="fa fa-plus-circle"></i> Ajouter Service
@endsection

@section('content')

    <div class="box">

        <div class="box-header with-border">
            <h3 class="box-title">Entrer les informations du service</h3>

            <!-- Start Button  -->
            <div class="button-page-header" style="margin-top:5px">
                <a class="btn btn-block btn-warning" href="{{ route('admin.services.index') }}">
                <i class="fa fa-reply fa-fw fa-lg"></i> Retour</a>
            </div>

        </div>

        <div class="box-body">

            <form id="myForm" action="{{ route('admin.services.store') }}" method="POST" class="userForm" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('POST') }}

                <!-- Start Row  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name"><b>Nom</b></label>
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
                            <label for="icon"><b>Icône</b></label>
                            <input type="text" name="icon" id="icon" class="form-control {{ $errors->has('icon') ? 'is-invalid' : '' }}" value="{{ old('icon') }}">
                            @if ($errors->has('icon'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('icon') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                </div>

                <div class="row">


                </div>


                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputFile"><b>Photo</b></label>
                            <input type="file" name="image" id="exampleInputFile" style="padding: 10px;height:45px" class="form-control image {{ $errors->has('image') ? 'is-invalid' : '' }}">
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

                     <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description"><b>Description</b></label>
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
                            <button type="submit" class="btn btn-primary btn-block" style="font-size:16px"><i class="fa fa-check fa-fw fa-lg"></i>Ajouter</button>
                        </div>
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

    // Validate Form ...
    $('#myForm').validate({
       rules : {
            name : { required : true},
            price : { required : true },
            category_id : { required : true},
            user_id : { required : true},
            description : { required : true},
            type : { required : true},
            delivery_type : { required : true},
            city_id : { required : true},
            area_id : { required : true},
            image : { required : true }
        },
        messages : {
           },
           errorEelement : 'span',
           errorPlacement : function(error , element){
               element.closest('.form-group').append(error);
           },

    });


});

</script>
@endpush
