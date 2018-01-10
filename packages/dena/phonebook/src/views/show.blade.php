@extends('phonebook::master')

@section('content')

    <h4>Name: {{ $contact->name }}</h4>
    <h4>Surname: {{ $contact->surname }}</h4>
    <h4>Type: {{ $contact->type }}</h4>
    <h4>Number: {{ $contact->number }}</h4>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <a href="/contacts" class="btn btn-info">Back to all contacts</a>
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

@stop