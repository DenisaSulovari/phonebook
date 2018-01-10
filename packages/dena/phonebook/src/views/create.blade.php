@extends('phonebook::master')

@section('content')

    <h1>Add a New Contact</h1>
    <p class="lead">Add to your contact list below.</p>
    <hr>
    {!! Form::open([
        'route' => 'contacts.store'
    ]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! Form::label('surname', 'Surname:', ['class' => 'control-label']) !!}
        {!! Form::text('surname', null, ['class' => 'form-control']) !!}

        {!! Form::label('type', 'Type:', ['class' => 'control-label']) !!}
        {!! Form::select('type', ['Home' => 'Home','Mobile' => 'Mobile','Work' => 'Work'],null, ['class' => 'form-control']) !!}


        {!! Form::label('number', 'Number:', ['class' => 'control-label']) !!}
        {!! Form::number('number', null, ['class' => 'form-control']) !!}

    </div>



    {!! Form::submit('Create New Contact', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@stop