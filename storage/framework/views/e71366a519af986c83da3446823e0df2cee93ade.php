<?php $__env->startSection('head'); ?>
	<!-- BEGIN PAGE LEVEL STYLES -->
	<?php echo HTML::style("assets/global/plugins/select2/select2.css"); ?>

	<?php echo HTML::style("assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"); ?>

	<!-- END PAGE LEVEL STYLES -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('mainarea'); ?>

			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			<?php echo e($pageTitle); ?>

			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo e(route('admin.dashboard.index')); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>

					<li>
                        <a href="#">Departments and Designations</a>
                        <i class="fa"></i>
                    </li>

				</ul>
			
			</div>
			<!-- END PAGE HEADER-->

			  <div id="load">
                        
                               <?php echo $__env->make('admin.common.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                       
                        </div>

			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->


				<a class="btn green" data-toggle="modal" href="#static">
                                        Add New Department
                         <i class="fa fa-plus"></i> </a>

                     <hr>
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-briefcase"></i>Department List
							</div>
							<div class="tools">
							</div>
						</div>

						<div class="portlet-body">

							<table class="table table-striped table-bordered table-hover">
							<thead>
							<tr>
								<th>
									 ID
								</th>
								<th>
									 Department Name
								</th>
								<th>
									 Designations
								</th>

								<th>
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
				<?php if(count($departments)>0): ?>
				<?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr id="row<?php echo e($department->id); ?>">
								<td>
									  <?php echo e($department->id); ?>

								</td>
								<td>
								 <?php echo e($department->deptName); ?>


								</td>

								<td>
                                    <ol>
                                    <?php $__currentLoopData = $department->Designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <li>   <?php echo e($desig->designation); ?></li>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ol>
								</td>
								<td class=" ">
                                	<a class="btn purple"  data-toggle="modal" href="#edit_static" onclick="showEdit(<?php echo e($department->id); ?>,'<?php echo e($department->deptName); ?>')"><i class="fa fa-edit"></i> View/Edit</a>

              						<a class="btn red" href="javascript:;" onclick="del(<?php echo e($department->id); ?>,'<?php echo e($department->deptName); ?>')"><i class="fa fa-trash"></i> Delete</a>
                                </td>
							</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
					
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					
				</div>
			</div>
			<!-- END PAGE CONTENT-->

        

             			<div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <h4 class="modal-title"><strong><i class="fa fa-plus"></i> New Department</strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="portlet-body form">

                                                                    						<!-- BEGIN FORM-->
                                        <?php echo Form::open(array('route'=>"admin.departments.store",'class'=>'form-horizontal ','method'=>'POST')); ?>



                                            <div class="form-body">

                                                    <p class="text-success">
                                                             Department
                                                           </p>
                                                  <div class="form-group">
                                                      <div class="col-md-12">
                                                         <input class="form-control form-control-inline " name="deptName" type="text" value="" placeholder="Department"/>

                                                      </div>

                                                 </div>
                                                <hr>
                                                 <p class="text-success">
                                                          Designations
                                                </p>
                                                <div class="form-group">
                                                     <div class="col-md-6">
                                                        <input class="form-control form-control-inline input-medium " name="designation[0]" type="text" value="" placeholder="Designation #1"/>
                                                     </div>
                                                    <div class="col-md-6">

                                                   </div>
                                                </div>
                                                 <div id="insertBefore"></div>
                                                <button type="button" id="plusButton" class="btn btn-sm green form-control-inline">
                                                                More Designations <i class="fa fa-plus"></i>
                                                </button>

                                         </div>

                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" data-loading-text="Submitting..." class="demo-loading-btn btn green"><i class="fa fa-check"></i> Submit</button>

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
            </div>
                        </div>

          




             			<div id="edit_static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <h4 class="modal-title"><strong><i class="fa fa-edit"></i> Edit Department</strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="portlet-body form">

                                                                                        <!-- BEGIN FORM-->


                                    <?php echo Form::open(['method' => 'PATCH', 'url' => '','class'=>'form-horizontal','id'=>'edit_form']); ?>


                                        <div class="form-body">

                                                <p class="text-success">
                                              Department
                                            </p>
                                              <div class="form-group">
                                                  <div class="col-md-12">
                                                     <input class="form-control form-control-inline " name="deptName" id="edit_deptName" type="text" value="" placeholder="Department" />

                                                  </div>

                                             </div>

                                            <div id="deptresponse"></div>


                                             <div id="insertBefore_edit"></div>
                                            <button type="button" id="plus_edit_Button" class="btn btn-sm green form-control-inline">
                                                            More Designations <i class="fa fa-plus"></i>
                                            </button>

                                     </div>
                                     <br>
							   <div class="note note-warning">
							   <?php echo Lang::get('messages.deleteNoteDesignation'); ?>

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
                    </div>
                    </div>

  


			
                <?php echo $__env->make('admin.common.delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
<?php $__env->stopSection(); ?>



<?php $__env->startSection('footerjs'); ?>

<script>

             var $insertBefore = $('#insertBefore');
                    var $i = 0;
                    $('#plusButton').click(function(){
                         $i = $i+1;
                        $(' <div class="form-group"> <div class="col-md-12"><input class="form-control form-control-inline input-medium"  name="designation['+$i+']" type="text"  placeholder="Designation #'+($i+1)+'"/></div></div>').insertBefore($insertBefore);

                    });
//-----EDIT Modal

        var $insertBefore_edit = $('#insertBefore_edit');
             var $j = 0;
            $('#plus_edit_Button').click(function(){
              $j = $j+1;
              $(' <div class="form-group" id="edit_field"> <div class="col-md-12"><input class="form-control form-control-inline input-medium"  name="designation['+$j+']" type="text"  placeholder="Designation #'+($j+1)+'"/></div></div>').insertBefore($insertBefore_edit);


            });

		function del(id,dept)
		{

			$('#deleteModal').appendTo("body").modal('show');
			$('#info').html('Are you sure ! You want to delete <strong>'+dept+'</strong> department?<br>' +
			 '<br><div class="note note-warning">' +
			  '<?php echo Lang::get('messages.deleteNoteDepartment'); ?>'+
              '</div>');
			$("#delete").click(function()
			{
				var url = "<?php echo e(route('admin.departments.destroy',':id')); ?>";
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
                                $('#row'+id).fadeOut(500);
                                $('#load').html("<p class='alert alert-success text-center'><strong>"+name +"</strong> Successfully Deleted</p>");
                         }
                     });
				})

			}

			function showEdit(id,deptName)
			{

                    $('div[id^="edit_field"]').remove();
                    var url = "<?php echo e(route('admin.departments.update',':id')); ?>";
                    url = url.replace(':id',id);
                    $('#edit_form').attr('action',url );

					var get_url = "<?php echo e(route('admin.departments.edit',':id')); ?>";
					get_url = get_url.replace(':id',id);

			        $("#edit_deptName").val(deptName);
			        $("#deptresponse").html('<div class="text-center"><?php echo HTML::image('assets/admin/layout/img/loading-spinner-blue.gif'); ?></div>');

                    $.ajax({

                            type: "GET",
                            url : get_url,

                            data: {"id":id}

                            }).done(function(response)
                              {
                                        $("#deptresponse").html(response);
                                        $j = $('input#designation').length-1;
                             });

			}
</script>
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('admin.adminlayouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>