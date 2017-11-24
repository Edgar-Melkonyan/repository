<?php $__env->startSection('content'); ?>


<h1>Showing <?php echo e($person->name); ?></h1>

    <div class="jumbotron text-center">
        <h2><?php echo e($person->name); ?></h2>
        <p>
            <strong>Email:</strong> <?php echo e($person->email); ?><br>
            <strong>Level:</strong> <?php echo e($person->level); ?>

        </p>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('persons.main.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>