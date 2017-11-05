<?php
    $title = config('app.name');
?>



<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>
<h1><?php echo e($title); ?></h1>
<p>
    <?php echo e(__('My practice for basic CRUD of Laravel 5.5 on Heroku.')); ?>

</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.my', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>