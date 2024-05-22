<?php $__env->startSection('title'); ?> Edit <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(route('posts.update' , $post->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?> 
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" name=Title class="form-control" value="<?php echo e($post->title); ?>" id="exampleFormControlInput1" placeholder="EX: Bloge name">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea name=Descrip class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo e($post->description); ?></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Post Creator</label>
        <select name=PostCreator class="form-control">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <option <?php if($user->id == $post->user_id): echo 'selected'; endif; ?> value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    
    <input type="submit" class="btn btn-outline-primary" value="Update"></input>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ahmed/Desktop/Bloging/resources/views/posts/edit.blade.php ENDPATH**/ ?>