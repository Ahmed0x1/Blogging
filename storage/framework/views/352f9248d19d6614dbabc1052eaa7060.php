
<?php echo e("Welcome " . $username); ?>


<?php echo e("----------------------"); ?>


<?php $__currentLoopData = $programingLanguges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pL): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($pL); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php /**PATH /home/ahmed/Desktop/Bloging/resources/views/Test2.blade.php ENDPATH**/ ?>