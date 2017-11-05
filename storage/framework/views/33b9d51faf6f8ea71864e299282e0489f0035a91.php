<?php
    $title = __('Users');
?>

<?php $__env->startSection('content'); ?>
<h1><?php echo e($title); ?></h1>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?php echo e(__('ID')); ?></th>
                <th><?php echo e(__('Name')); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><a href="<?php echo e(url('users/'.$user->id)); ?>"><?php echo e($user->name); ?></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.my', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>