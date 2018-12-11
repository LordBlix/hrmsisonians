<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">

        <?php echo $__env->make('admin.include.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="page-header-fixed page-quick-sidebar-over-content page-style-square"> 

        <?php echo $__env->make('admin.include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix">
        </div>

<!-- BEGIN CONTAINER -->
<div class="page-container">

         <?php echo $__env->make('admin.include.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
     
                <?php echo $__env->yieldContent('mainarea'); ?>

        </div>
        
    </div>
    <!-- END CONTENT -->
    
</div>
<!-- END CONTAINER -->

    <?php echo $__env->make('admin.include.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->make('admin.include.footerjs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
<!-- END BODY -->
</html>
