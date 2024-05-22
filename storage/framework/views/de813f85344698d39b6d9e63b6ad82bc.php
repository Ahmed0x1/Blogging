<?php $__env->startSection('title'); ?> Index <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="mt-5">
        <div class="text-center">
            <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-outline-success">Create Posts</a>
        </div>
        <div class="mt-2">
          
            <div class='p-5'>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Posted By</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($post->id); ?></th>
                            <td><?php echo e($post->title); ?></td>
                            <td><?php echo e($post->user->name); ?></td>
                            <td><?php echo e($post->created_at); ?></td>
                            <td>
                                <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="btn btn-info">View</a>
                                <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-primary">Edit</a>
                                
                                <form style="display: inline;" method=post action="<?php echo e(route('posts.destroy', $post->id)); ?>">
                                  <?php echo csrf_field(); ?>
                                  <?php echo method_field('DELETE'); ?>
                                  
                                  <input type="submit" class="btn btn-danger" value="Delete"></input>
                                </form>
                              </td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ahmed/Desktop/Bloging/resources/views/posts/index.blade.php ENDPATH**/ ?>