<?php $__env->startSection('head'); ?>
	<!-- BEGIN PAGE LEVEL STYLES -->
	<?php echo HTML::style("assets/global/plugins/select2/select2.css"); ?>

	<?php echo HTML::style("assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"); ?>

	<!-- END PAGE LEVEL STYLES -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('mainarea'); ?>

			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			<?php echo e($pageTitle); ?> <small><?php echo Lang::get('menu.employeeList'); ?></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo e(route('admin.dashboard.index')); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo e(route('admin.employees.index')); ?>">Employees</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Employee List</a>
					</li>
				</ul>

			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->

			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div id="load">

						<?php if(Session::get('success')): ?>
							<div class="alert alert-success"><?php echo Session::get('success'); ?></div>
						<?php endif; ?>

                    </div>
                   <a href="<?php echo e(route('admin.employees.create')); ?>" class="btn green">
                    Add New Employee <i class="fa fa-plus"></i>
                    </a>

                         <hr>
					<div class="portlet box blue">

						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-users"></i>Employees List
							</div>
							<div class="tools" style="  padding: 5px;">
								<div class="btn-group pull-right">
                        						 <a  href="<?php echo e(route('admin.employees.export')); ?>" class="btn yellow">
											     <i class="fa fa-file-excel-o"></i>    Export
												</a>
								</div>
							</div>
						</div>

						<div class="portlet-body">

							<table class="table table-striped table-bordered table-hover" id="sample_employees">
							<thead>
							<tr>
								<th class="text-center">
									 EmployeeID
								</th>
								<th class="text-center">
                                     Image
                                </th>
								<th style="text-align: center">
									 Name
								</th>
								<th class="text-center">
                                	 Dept/Designation
                                </th>
								<th class="text-center">
                                	 At Work
                                </th>
								<th class="text-center">
									 Phone
								</th>
								<th class="text-center">
									 Status
								</th>
								<th class="text-center">
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
					
							<?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr id="row<?php echo e($employee->employeeID); ?>">
                                    <td>
                                            <?php echo e($employee->employeeID); ?>


                                    </td>
                                    <td class="text-center">
                                        <?php echo HTML::image("/profileImages/{$employee->profileImage}",'ProfileImage',['height'=>'80px']); ?>


                                    </td>
                                    <td>
                                          <?php echo e($employee->fullName); ?>

                                    </td>
                                    <td>
                                          <p>Department: <strong><?php echo e(isset($employee->getDesignation->department->deptName) ? $employee->getDesignation->department->deptName : ''); ?></strong></p>
                                          <p>Designation: <strong><?php echo e(isset($employee->getDesignation->designation) ? $employee->getDesignation->designation : ''); ?></strong></p>
                                    </td>
                                     <td class="text-center">
                                          <?php echo e($employee->workDuration($employee->employeeID)); ?>

                                    </td>
                                     <td>
                                          <?php echo e($employee->mobileNumber); ?>

                                    </td>
                                    <td>
                                    <?php if($employee->status=='active'): ?>
                                        <span class="label label-sm label-success"> <?php echo e($employee->status); ?> </span>
                                    <?php else: ?>
                                        <span class="label label-sm label-danger"> <?php echo e($employee->status); ?> </span>
                                     <?php endif; ?>
                                    </td>
                                    <td class="">
                                    <p> <a class="btn purple" href="<?php echo e(route('admin.employees.edit',$employee->employeeID)); ?>"><i class="fa fa-edit"></i> View/Edit</a></p>
                                    <p>    <a class="btn red" style="width: 105px;" href="javascript:;" onclick="del('<?php echo e($employee->employeeID); ?>','<?php echo e($employee->fullName); ?>')"><i class="fa fa-trash"></i> Delete</a></p>
                                    </td>
                                </tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
					
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					
				</div>
			</div>
			<!-- END PAGE CONTENT-->

			
                            <?php echo $__env->make('admin.common.delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
             

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footerjs'); ?>


<!-- BEGIN PAGE LEVEL PLUGINS -->
	<?php echo HTML::script("assets/global/plugins/select2/select2.min.js"); ?>

	<?php echo HTML::script("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"); ?>

	<?php echo HTML::script("assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"); ?>

    <?php echo HTML::script("assets/admin/pages/scripts/table-managed.js"); ?>

<!-- END PAGE LEVEL PLUGINS -->

	<script>
	jQuery(document).ready(function() {

	   TableManaged.init();
	});
	</script>
	<script>
	function del(id,name)
    		{
    			$('#deleteModal').appendTo("body").modal('show');
    			$('#info').html('Are you sure ! You want to delete <strong>'+name+'</strong> ??');
    			$("#delete").click(function()
    			{
    					var url = "<?php echo e(route('admin.employees.destroy',':id')); ?>";
						url = url.replace(':id',id);

    					 $.ajax({
    		                type: "DELETE",
    		                url : url,
    		                dataType: 'json',
    		                data: {"id":id}

    		            	}).done(function(response)
    		           		  {

    		               	 	 if(response.success == "deleted")
    		                 	 {
    		                 	 		$("html, body").animate({ scrollTop: 0 }, "slow");
    		                  	   		$('#deleteModal').modal('hide');
    		                 	  		$('#row'+id).closest('tr').remove();
    		                 	  		$('#load').html("<p class='alert alert-success text-center'><strong>"+name +"</strong> Successfully Deleted</p>");
    		                  	 }
    		           		 });
    				})

    			}


</script>
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('admin.adminlayouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>