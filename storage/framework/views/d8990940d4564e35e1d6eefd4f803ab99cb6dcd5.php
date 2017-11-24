<?php $__env->startSection('content'); ?>


<h1>Edit <?php echo e($person->name); ?></h1>

<!-- if there are creation errors, they will show here -->
<?php if(Session::has('message')): ?>
    <div class="alert alert-success">
        <strong><?php echo e(Session::get('message')); ?></strong>
    </div>
<?php endif; ?>
<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php echo e(Form::model($person, array('route' => array('persons.update', $person->id), 'method' => 'PUT'))); ?>


    <div class="form-group">
        <?php echo e(Form::label('name', 'Name')); ?>

        <?php echo e(Form::text('name', null, array('class' => 'form-control'))); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('email', 'Email')); ?>

        <?php echo e(Form::email('email', null, array('class' => 'form-control'))); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('level', 'Person Level')); ?>

        <?php echo e(Form::select('level', array(' ' => 'Select a Level', '1' => 'User', '2' => 'Admin', '3' => 'Super Admin'), null, array('class' => 'form-control'))); ?>

    </div>

    <?php echo e(Form::submit('Edit the Person!', array('class' => 'btn btn-primary'))); ?>


<?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('persons.main.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>