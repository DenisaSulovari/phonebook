@extends('phonebook::master')

@section('content')

    <h1>Edit Contact - Contact Name </h1>
    <p class="lead">Edit this Contact below. <a href="/contacts">Go back to all contacts.</a></p>
    <hr>

    {!! Form::model($contact, [
    'method' => 'PATCH',
    'route' => ['contacts.update', $contact->id]
]) !!}

    <div class="form-group @if ($errors->get('name')): has-error @endif">
        {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <p class="help-block">{{ $errors->first('name') }}</p>
        @endif
    </div>

    <div class="form-group @if ($errors->get('surname')): has-error @endif">
        {!! Form::label('surname', 'Surname:', ['class' => 'control-label']) !!}
        {!! Form::text('surname', null, ['class' => 'form-control']) !!}
        @if ($errors->has('surname'))
            <p class="help-block">{{ $errors->first('surname') }}</p>
        @endif
    </div>

    <div class="form-group @if ($errors->get('type')): has-error @endif">
        {!! Form::label('type', 'Type:', ['class' => 'control-label']) !!}
        {!! Form::select('type', ['Home' => 'Home','Mobile' => 'Mobile','Work' => 'Work'],null, ['class' => 'form-control']) !!}
        @if ($errors->has('type'))
            <p class="help-block">{{ $errors->first('type') }}</p>
        @endif
    </div>

    <div class="form-group @if ($errors->get('number')): has-error @endif">
        {!! Form::label('number', 'Number:', ['class' => 'control-label']) !!}
        {!! Form::text('number', null, ['class' => 'form-control']) !!}
        @if ($errors->has('number'))
            <p class="help-block">{{ $errors->first('number') }}</p>
        @endif
    </div>


    {!! Form::submit('Update Contact', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop