@extends('phonebook::master')

@section('content')

    <h1>Contacts List</h1>
    <p class="lead">Here's a list of all your contacts. <a href="/contacts/create">Add a new one?</a></p>
    <hr>

    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif

    @foreach($contacts as $contact)
        <h4>Name: {{ $contact->name }}</h4>
        <h4>Surname: {{ $contact->surname}}</h4>
        <h4>Type: {{ $contact->type}}</h4>
        <h4>Number: {{ $contact->number}}</h4>


        <div class="row">
            <div class="col-md-6">
                <a href="/{{ 'contacts/'.$contact->id}}" class="btn btn-info">View Contact</a>
                <a href="/{{ 'contacts/'.$contact->id.'/edit' }}" class="btn btn-primary">Edit Contact</a>

            </div>
            <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['contacts.destroy', $contact->id]
                ]) !!}
                {!! Form::submit('Delete this contact?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        <hr>
    @endforeach

@stop