

<?php echo e($welcome); ?>


<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($section . " : " . $service); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/ahmed/Desktop/Bloging/resources/views/About.blade.php ENDPATH**/ ?>