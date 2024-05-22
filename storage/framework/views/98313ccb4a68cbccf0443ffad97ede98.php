<?php $__env->startSection('title'); ?> Create <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('posts.store')); ?>">
        <?php echo csrf_field(); ?> 
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" name=Title class="form-control" id="exampleFormControlInput1" placeholder="EX: Bloge name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea name=Descrip class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Post Creator</label>
            <select name=PostCreator class="form-control">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                    
                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        
        <input type="submit" class="btn btn-outline-success" value="Create"></input>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ahmed/Desktop/Bloging/resources/views/posts/create.blade.php ENDPATH**/ ?>