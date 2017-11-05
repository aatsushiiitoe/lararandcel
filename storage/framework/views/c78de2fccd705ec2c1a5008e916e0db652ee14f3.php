<form style="display:inline" action="<?php echo e(url($table.'/'.$id)); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('DELETE')); ?>

    <button type="submit" class="btn btn-danger">
        <?php echo e(__('Delete')); ?>

    </button>
</form>
