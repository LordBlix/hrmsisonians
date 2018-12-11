<?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<li><?php echo e($person->fullName); ?></li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>