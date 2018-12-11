<?php $__env->startSection('head'); ?>
    <!-- BEGIN PAGE LEVEL STYLES -->
    <?php echo HTML::style("assets/global/plugins/bootstrap-datepicker/css/datepicker3.css"); ?>

    <?php echo HTML::style("assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"); ?>

    <!-- BEGIN THEME STYLES -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('mainarea'); ?>

			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			<?php echo e($pageTitle); ?> Add page
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo e(route('admin.dashboard.index')); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo e(route('admin.expenses.index')); ?>">expenses</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="">Add Item</a>
					</li>
				</ul>
			
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->

                
                <?php echo $__env->make('admin.common.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                


					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-plus"></i>Add New item
							</div>
							<div class="tools">
							</div>
						</div>

						<div class="portlet-body form">

						<!-- BEGIN FORM-->
						<?php echo Form::open(array('route'=>"admin.expenses.store",'class'=>'form-horizontal form-bordered','method'=>'POST','files'=>true)); ?>



                                    <div class="form-body">

                                        <div class="form-group">
                                        <label class="col-md-2 control-label">Item Name: <span class="required">
                                        * </span>
                                            </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="itemName" placeholder="Item Name" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="col-md-2 control-label">Purchase From:
                                            </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="purchaseFrom" placeholder="Purchase From" value="" >
                                            </div>
                                        </div>

                                          <div class="form-group">
                                                    <label class="col-md-2 control-label">Purchase Date:
                                                        </label>
                                                        <div class="col-md-6">
                                                            <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                                       <input type="text" class="form-control" name="purchaseDate" readonly >
                                                                   <span class="input-group-btn">
                                                                   <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                                                   </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-2 control-label">Amount price:<span class="required">  * </span>  <span class="fa <?php echo e($setting->currency_icon); ?>"></span></label>

                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="price" placeholder="Price of Item" value="">
                                                </div>
                                    </div>

                                     <div class="form-group">
                                                    <label class="col-md-2 control-label">Attach Bill:</label>

                                                    <div class="col-md-6">
                                                       <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                       <div class="input-group input-large">
                                                                           <div class="form-control uneditable-input" data-trigger="fileinput">
                                                                               <i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
                                                                               </span>
                                                                           </div>
                                                                           <span class="input-group-addon btn default btn-file">
                                                                           <span class="fileinput-new">
                                                                           Select file </span>
                                                                           <span class="fileinput-exists">
                                                                           Change </span>
                                                                           <input type="file" name="bill">
                                                                           </span>
                                                                           <a href="#" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
                                                                           Remove </a>
                                                                       </div>

                                                               </div>
                                                    </div>
                                        </div>



                        								<div class="form-actions">
                        									<div class="row">
                        										<div class="col-md-offset-3 col-md-9">
                        											<button type="submit" data-loading-text="Submitting..." class="demo-loading-btn btn green"><i class="fa fa-check"></i> Add</button>

                        										</div>
                        									</div>
                        								</div>
                        						<?php echo Form::close(); ?>

                        							<!-- END FORM-->

						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					
				</div>
			</div>
			<!-- END PAGE CONTENT-->



<?php $__env->stopSection(); ?>

<?php $__env->startSection('footerjs'); ?>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<?php echo HTML::script("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"); ?>

<?php echo HTML::script("assets/admin/pages/scripts/components-pickers.js"); ?>

<?php echo HTML::script("assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"); ?>

<!-- END PAGE LEVEL PLUGINS -->
<script>
jQuery(document).ready(function() {

           ComponentsPickers.init();
            dept();

        });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlayouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>