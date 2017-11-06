<?php
    $title = $post->title;
?>

<?php $__env->startSection('content'); ?>
<h1 id="post-title"><?php echo e($title); ?></h1>

<!-- 編集・削除ボタン -->
<div class="edit">
    <a href="<?php echo e(url('posts/'.$post->id.'/edit')); ?>" class="btn btn-primary">
        <?php echo e(__('Edit')); ?>

    </a>
    <?php $__env->startComponent('components.btn-del'); ?>
        <?php $__env->slot('table', 'posts'); ?>
        <?php $__env->slot('id', $post->id); ?>
    <?php echo $__env->renderComponent(); ?>
</div>

<!-- 記事内容 -->
<dl class="row">
    <dt class="col-md-2"><?php echo e(__('Created')); ?>:</dt>
    <dd class="col-md-10">
        <time itemprop="dateCreated" datetime="<?php echo e($post->created_at); ?>">
            <?php echo e($post->created_at); ?>

        </time>
    </dd>
    <dt class="col-md-2"><?php echo e(__('Updated')); ?>:</dt>
    <dd class="col-md-10">
        <time itemprop="dateModified" datetime="<?php echo e($post->updated_at); ?>">
            <?php echo e($post->updated_at); ?>

        </time>
    </dd>
</dl>
<hr>
<div id="post-body">
    <?php echo e($post->body); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.my', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>