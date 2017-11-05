<?php
    $title = __('Create User');
?>

<?php $__env->startSection('content'); ?>
<h1><?php echo e($title); ?></h1>
<form action="<?php echo e(url('users')); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('POST')); ?>

    <div class="form-group">
        <label for="name"><?php echo e(__('Name')); ?></label>
        <input id="name" type="text" class="form-control" name="name" required autofocus>
    </div>
    <div class="form-group">
        <label for="email"><?php echo e(__('Email')); ?></label>
        <input id="email" type="email" class="form-control" name="email" required>
    </div>
    <div class="form-group">
        <label for="password"><?php echo e(__('Password')); ?></label>
        <input id="password" type="password" class="form-control" name="password" required>
    </div>
    <div class="form-group">
        <label for="password_confirmation"><?php echo e(__('Confirm Password')); ?></label>
        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.my', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>