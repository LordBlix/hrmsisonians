<?php $__env->startSection('head'); ?>

    <!-- BEGIN PAGE LEVEL STYLES -->
    <?php echo HTML::style('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css'); ?>

    <?php echo HTML::style('assets/global/plugins/bootstrap-datepicker/css/datepicker3.css'); ?>

    <!-- END PAGE LEVEL STYLES -->
    <?php $__env->stopSection(); ?>


<?php $__env->startSection('mainarea'); ?>
    <?php
        use Illuminate\Support\Facades\Input
    ?>

 

    <?php if(count($department)==0): ?>
        
    <?php else: ?>
      

        
        <?php echo $__env->make('admin.common.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        <hr>
      
        <?php echo Form::open(array('route'=>"admin.employees.store",'class'=>'form-horizontal','method'=>'POST','files' => true)); ?>

        <div class="row ">
            <div class="col-md-6 col-sm-6">
                <div class="portlet box purple-wisteria">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-calendar"></i>Personal Details
                        </div>

                    </div>
                    <div class="portlet-body">

                        <div class="form-body">
                     
                            <div class="form-group">
                                <label class="col-md-3 control-label">Name <span class="required">* </span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="fullName" placeholder="Employee Name"
                                           value="<?php echo e(Input::old('fullName')); ?>">
                                </div>
                            </div>

                           
                           

                        </div>

                    </div>
                </div>

          
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="portlet box red-sunglo">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-calendar"></i>Company Details
                        </div>

                    </div>
                    <div class="portlet-body">

                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Employee ID<span
                                            class="required">* </span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="employeeID" placeholder="Employee ID"
                                           value="<?php echo e(Input::old('employeeID')); ?>">
                                </div>
                            </div>
                     
                       
                        
                                   
                                </div>
                            </div>
                          
                        </div>

                    </div>
                </div>

        


            </div>
        </div>
        <div class="clearfix">
 
            <div class="form-actions text-center">
                <button type="submit" data-loading-text="Submitting..."
                        class="demo-loading-btn btn green">
                    <i class="fa fa-plus"></i> Submit
                </button>
            </div>
        </div>
        </form>
    <?php endif; ?>
    <hr>

    </div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('footerjs'); ?>


    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <?php echo HTML::script('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js'); ?>

    <?php echo HTML::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>

    <?php echo HTML::script("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"); ?>

    <?php echo HTML::script('assets/admin/pages/scripts/components-pickers.js'); ?>

    <!-- END PAGE LEVEL PLUGINS -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminlayouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>