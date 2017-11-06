<?php
    $title = __('Posts');
?>

<?php $__env->startSection('content'); ?>
<h1><?php echo e($title); ?></h1>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?php echo e(__('Title')); ?></th>
                <th><?php echo e(__('Body')); ?></th>
                <th><?php echo e(__('Created')); ?></th>
                <th><?php echo e(__('Updated')); ?></th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <a href="<?php echo e(url('posts/'.$post->id)); ?>"><?php echo e($post->title); ?></a>
                </td>
                <td><?php echo e($post->body); ?></td>
                <td><?php echo e($post->created_at); ?></td>
                <td><?php echo e($post->updated_at); ?></td>
             </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.my', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>