
<?php echo e("Welcome ".$username); ?>


<?php echo e("   Lang:"); ?>

<?php $__currentLoopData = $languges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($lang); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/ahmed/Desktop/Bloging/resources/views/Home.blade.php ENDPATH**/ ?>