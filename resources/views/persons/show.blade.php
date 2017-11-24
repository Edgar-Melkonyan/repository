@extends('persons.main.header')

@section('content')


<h1>Showing {{ $person->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $person->name }}</h2>
        <p>
            <strong>Email:</strong> {{ $person->email }}<br>
            <strong>Level:</strong> {{ $person->level }}
        </p>
    </div>

@endsection