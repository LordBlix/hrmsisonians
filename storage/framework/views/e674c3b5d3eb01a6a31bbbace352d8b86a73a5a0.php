<?php $__env->startSection('head'); ?>
    <!-- BEGIN PAGE LEVEL STYLES -->
    <?php echo HTML::style("assets/global/plugins/bootstrap-datepicker/css/datepicker3.css"); ?>

    <?php echo HTML::style("assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"); ?>

    <!-- BEGIN THEME STYLES -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('mainarea'); ?>

			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			No. of Vacant Position page
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo e(route('admin.dashboard.index')); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo e(route('admin.vacant.index')); ?>">Vacant</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="">Edit Item</a>
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
								<i class="fa fa-edit"></i>Edit item
							</div>
							<div class="tools">
							</div>
						</div>

						<div class="portlet-body form">

						<!-- BEGIN FORM-->
						<?php echo Form::open(array('route'=>["admin.vacant.update",$vacant->ID],'class'=>'form-horizontal form-bordered','method'=>'PATCH','files'=>true)); ?>



                                    <div class="form-body">

                                        <div class="form-group">
                                        <label class="col-md-2 control-label">Place of Assignment : <span class="required"> * </span></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="placeOfAssignment" placeholder="Place of Assignment" value="<?php echo e($vacant->name); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                             <label class="col-md-2 control-label">Position Title : </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="positionTitle" placeholder="Position" value="<?php echo e($vacant->Position); ?>" >
                                            </div>
                                        </div>

                                         <div class="form-group">
                                             <label class="col-md-2 control-label">Plantilla Item No. : </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="plantillaItemNo" placeholder="Plantilla Item No" value="<?php echo e($vacant->Plantilla); ?>" >
                                            </div>
                                        </div>

                                           <div class="form-group">
                                             <label class="col-md-2 control-label">Salary/Job/Pay Grade : </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="payGrade" placeholder="Salary Job/ Pay Grade" value="<?php echo e($vacant->Pay); ?>" >
                                            </div>
                                        </div>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="">Monthly Salary :</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="monthlySalary" placeholder="Monthly Salary" value="<?php echo e($vacant->Salary); ?>">
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label"  for="">Eligibility :</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="Eligibility" placeholder="Eligibility" value="<?php echo e($vacant->Eligibility); ?>">
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label"  for="">Education :</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="Education" placeholder="Education" value="<?php echo e($vacant->Education); ?>">
                                            </div>
                                        </div>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="">Training :</label>    
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="Training" placeholder="Training" value="<?php echo e($vacant->Training); ?>">                                            
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="">Work Experience :</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="workExperience" placeholder="Work Experience" value="<?php echo e($vacant->Experience); ?>">
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="">Competency</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="competency" placeholder="competency" value="<?php echo e($vacant->Competency); ?>">
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="">Instruction</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="Instruction" placeholder="Instruction" value="<?php echo e($vacant->Instruction); ?>">
                                            </div>
                                        </div>

                                          <div class="form-group">
                                                    <label class="col-md-2 control-label">Posting Date:  </label>
                                                        <div class="col-md-6">
                                                            <div class="input-group input-medium date date-picker"  data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                                       <input type="text" class="form-control" name="postingDate" readonly value="<?php echo e(date('d-m-Y',strtotime($vacant->PostDate))); ?>">
                                                                   <span class="input-group-btn">
                                                                   <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                                                   </span>
                                                                   </div>
                                                        </div>
                                           </div>
                                        
                                        <div class="form-group">
                                                    <label class="col-md-2 control-label" for="">Closing Date</label>
                                                        <div class="col-md-6">
                                                            <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-data-viewmode="years" >
                                                                    <input type="text" class="form-control" name="closingDate" readonly value="<?php echo e(date('d-m-y',strtotime($vacant->CloseDate))); ?>">
                                                                    <span class="input-group-btn">
                                                                    <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                        </div>


                                     <div class="form-group">
                                                    <label class="col-md-2 control-label">Attach Documents:</label>
                                                    <input type="hidden" name="billhidden" value="<?php echo e($vacant->bill); ?>">
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
                                                    <div class="col-md-4">

                                                    <?php if($vacant->bill!=''): ?>
                                                            <a href="https://docs.google.com/viewer?url=<?php echo e(URL::to('expense/bills/'.$vacant->bill)); ?>" target="_blank"  class="btn purple">View Bill</a>
                                                     <?php endif; ?>
                                                    </div>

                                        </div>



                        								<div class="form-actions">
                        									<div class="row">
                        										<div class="col-md-offset-3 col-md-9">
                        											<button type="submit" data-loading-text="Updating..." class="demo-loading-btn btn green"><i class="fa fa-edit"></i> Update</button>

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


        });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlayouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>