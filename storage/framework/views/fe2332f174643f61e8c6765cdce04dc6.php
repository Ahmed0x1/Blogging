<?php $__env->startSection('title'); ?> Show <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="card mt-4">
        <div class="card-header">
            Post Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Title: <?php echo e($posts->title); ?></h5>
            <p class="card-text">Description: <?php echo e($posts->description); ?></p>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Name: <?php echo e($posts->user->name); ?></h5>
            <p class="card-text">Email: <?php echo e($posts->user->email); ?></p>
            <p class="card-text">Created At: <?php echo e($posts->user->created_at); ?></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ahmed/Desktop/Bloging/resources/views/posts/show.blade.php ENDPATH**/ ?>