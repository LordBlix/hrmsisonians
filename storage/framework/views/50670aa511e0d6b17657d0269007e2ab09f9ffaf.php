<?php $__env->startSection('head'); ?>

    <!-- BEGIN PAGE LEVEL STYLES -->
    <?php echo HTML::style('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css'); ?>

    <?php echo HTML::style('assets/global/plugins/bootstrap-datepicker/css/datepicker3.css'); ?>

    
    <?php echo HTML::style("training/style.css"); ?>

    <!-- END PAGE LEVEL STYLES -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainarea'); ?>
    <?php
        use Illuminate\Support\Facades\Input
    ?>
  
    <table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Full Name</th>
    <th>Address</th>
    <th>City</th>
    <th>Zip Code</th>
    <th>Action</th>
  </thead>
  <tbody>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($user->id); ?></td>
      <td><?php echo e($user->full_name); ?></td>
      <td><?php echo e($user->street_address); ?></td>
      <td><?php echo e($user->city); ?></td>
      <td><?php echo e($user->zip_code); ?></td>
      <td><a href="<?php echo e(route('admin.rating_pdf', $user->id)); ?>">PDF</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlayouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>