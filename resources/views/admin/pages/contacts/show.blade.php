@extends('admin.layouts.master')

@section('pageTitle') <i class="fa fa-envelope"></i> Détail du contact @endsection
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Détail du contact</h3>
            <a class="btn btn-warning" href="{{ route('admin.contacts.index') }}">
                <i class="fa fa-reply fa-fw fa-lg"></i> Retour
            </a>
        </div>
        <div class="box-body">
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <label><b>Nom</b></label>
                        <div class="form-control">{{ $contact->name }}</div>
                    </div>
                    <div class="form-group">
                        <label><b>Email</b></label>
                        <div class="form-control">{{ $contact->email }}</div>
                    </div>
                    <div class="form-group">
                        <label><b>Date</b></label>
                        <div class="form-control">{{ $contact->created_at->format('d/m/Y H:i') }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label><b>Message</b></label>
                        <div class="form-control" style="min-height:120px">{{ $contact->message }}</div>
                    </div>
                </div>
            </div>
            <a class="btn btn-danger" href="#" onclick="event.preventDefault();document.getElementById('delete-contact').submit();">
                <i class="fa fa-trash"></i> Supprimer
            </a>
            <form id="delete-contact" method="POST" action="{{ route('admin.contacts.destroy', $contact) }}" style="display:none">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
@endsection
