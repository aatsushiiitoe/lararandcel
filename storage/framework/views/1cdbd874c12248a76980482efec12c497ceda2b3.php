<?php
    $title = __('User') . ': ' . $user->name;
?>

<?php $__env->startSection('content'); ?>
<h1><?php echo e($title); ?></h1>

<!-- 編集・削除ボタン -->
<div>
    <a href="<?php echo e(url('users/'.$user->id.'/edit')); ?>" class="btn btn-primary">
        <?php echo e(__('Edit')); ?>

    </a>
    <!-- 削除ボタンは後で正式なものに置き換えます -->
    <?php $__env->startComponent('components.btn-del'); ?>
        <?php $__env->slot('table', 'users'); ?>
        <?php $__env->slot('id', $user->id); ?>
    <?php echo $__env->renderComponent(); ?>
</div>

<!-- ユーザー1件の情報 -->
<dl class="row">
    <dt class="col-md-2"><?php echo e(__('ID')); ?></dt>
    <dd class="col-md-10"><?php echo e($user->id); ?></dd>
    <dt class="col-md-2"><?php echo e(__('Name')); ?></dt>
    <dd class="col-md-10"><?php echo e($user->name); ?></dd>
    <dt class="col-md-2"><?php echo e(__('Email')); ?></dt>
    <dd class="col-md-10"><?php echo e($user->email); ?></dd>
</dl>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.my', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>