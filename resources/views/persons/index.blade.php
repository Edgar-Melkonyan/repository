@extends('persons.main.header')

@section('content')


<h1>All the Persons</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Person Level</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
     @foreach($persons as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->level }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the persons (uses the destroy method DESTROY /persons/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'persons/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Person', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

                <!-- show the person (uses the show method found at GET /persons/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('persons/' . $value->id) }}">Show this Person</a>

                <!-- edit this person (uses the edit method found at GET /persons/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('persons/' . $value->id . '/edit') }}">Edit this Person</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection