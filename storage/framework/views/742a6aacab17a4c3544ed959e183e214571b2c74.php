 <?php if(Session::get('success')): ?>
        <div class="alert alert-success text-center"><i class="fa fa-check"></i> <?php echo Session::get('success'); ?></div>
 <?php endif; ?>
<?php if(count($errors)>0): ?>
       <div class="alert alert-danger alert-dismissable ">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
      
           <?php $__empty_1 = true; $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
               <p><strong><i class="fa fa-warning"></i></strong> <?php echo e($error); ?></p>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
           <?php endif; ?>
       </div>
<?php endif; ?>