<?php
    $title = __('Edit').': '.$user->name;
?>

<?php $__env->startSection('content'); ?>
<h1><?php echo e($title); ?></h1>
<form action="<?php echo e(url('users/'.$user->id)); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PUT')); ?>

    <div class="form-group">
        <label for="name"><?php echo e(__('Name')); ?></label>
        <input id="name" type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>" required autofocus>
    </div>
    <button type="submit" name="submit" class="btn btn-success"><?php echo e(__('Submit')); ?></button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.my', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>