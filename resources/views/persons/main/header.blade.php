<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('persons') }}">Person Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('persons') }}">View All Persons</a></li>
        <li><a href="{{ URL::to('persons/create') }}">Create a Person</a>
    </ul>
</nav>

@yield('content')

</div>
</body>
</html>