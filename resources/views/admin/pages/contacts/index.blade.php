@extends('admin.layouts.master')

@section('pageTitle') <i class="fa fa-envelope"></i> Contacts @endsection
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title" style="padding:10px">Liste des contacts</h3>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th width="8%">Gérer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ Str::limit($contact->message, 40) }}</td>
                                <td>{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('admin.contacts.show', $contact) }}" class="btn btn-sm btn-primary" >
                                        <i class="fa fa-eye fa-lg"></i>
                                    </a>
                                    <form method="POST" action="{{ route('admin.contacts.destroy', $contact) }}" style="display:inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ?')">
                                            <i class="fa fa-trash fa-lg"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3">{{ $contacts->links() }}</div>
            </div>
        </div>
    </div>
@endsection
