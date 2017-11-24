<?php $__env->startSection('content'); ?>


<h1>All the Persons</h1>

<!-- will be used to show any messages -->
<?php if(Session::has('message')): ?>
    <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>

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
     <?php $__currentLoopData = $persons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($value->id); ?></td>
            <td><?php echo e($value->name); ?></td>
            <td><?php echo e($value->email); ?></td>
            <td><?php echo e($value->level); ?></td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the persons (uses the destroy method DESTROY /persons/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                <?php echo e(Form::open(array('url' => 'persons/' . $value->id, 'class' => 'pull-right'))); ?>

                    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                    <?php echo e(Form::submit('Delete this Person', array('class' => 'btn btn-warning'))); ?>

                <?php echo e(Form::close()); ?>


                <!-- show the person (uses the show method found at GET /persons/{id} -->
                <a class="btn btn-small btn-success" href="<?php echo e(URL::to('persons/' . $value->id)); ?>">Show this Person</a>

                <!-- edit this person (uses the edit method found at GET /persons/{id}/edit -->
                <a class="btn btn-small btn-info" href="<?php echo e(URL::to('persons/' . $value->id . '/edit')); ?>">Edit this Person</a>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('persons.main.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>