@extends('persons.main.header')

@section('content')


<h1>Edit {{ $person->name }}</h1>

<!-- if there are creation errors, they will show here -->
@if(Session::has('message'))
    <div class="alert alert-success">
        <strong>{{Session::get('message')}}</strong>
    </div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::model($person, array('route' => array('persons.update', $person->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('level', 'Person Level') }}
        {{ Form::select('level', array(' ' => 'Select a Level', '1' => 'User', '2' => 'Admin', '3' => 'Super Admin'), null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the Person!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection