<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo e(URL::to('persons')); ?>">Person Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="<?php echo e(URL::to('persons')); ?>">View All Persons</a></li>
        <li><a href="<?php echo e(URL::to('persons/create')); ?>">Create a Person</a>
    </ul>
</nav>

<?php echo $__env->yieldContent('content'); ?>

</div>
</body>
</html>