<?php $__env->startSection('title'); ?> Home <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <div class="mt-3">
            <div class="card">
                <div class="card-header">
                <?php echo e($post->title); ?>

                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?php echo e($post->description); ?></p>
                        <footer class="blockquote-footer">Creator: <cite title="Source Title"><?php echo e($post->user->name); ?></cite></footer>
                        <a href="<?php echo e(route('posts.show' , $post->id)); ?>" class="btn btn-info">View</a>
                    </blockquote>
                </div>
            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ahmed/Desktop/Bloging/resources/views/home.blade.php ENDPATH**/ ?>