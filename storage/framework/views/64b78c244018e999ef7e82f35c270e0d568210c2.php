<?php $__env->startSection('head'); ?>
	<!-- BEGIN PAGE LEVEL STYLES -->
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
						<a href="#">Leave Applications</a>
						<i class="fa "></i>
					</li>

				</ul>

			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
						<div class="row">
            				<div class="col-md-6">

                            </div>
            				<div class="col-md-6 form-group text-right">

            				<span id="load_notification"></span>
            					 <input  type="checkbox"  onchange="ToggleEmailNotification('leave_notification');return false;" class="make-switch" name="leave_notification" <?php if($setting->leave_notification==1): ?>checked	<?php endif; ?> data-on-color="success" data-on-text="Yes" data-off-text="No" data-off-color="danger">
            					<strong>Email Notification</strong><br>


            				</div>
                         </div>

			<div class="row">
				<div class="col-md-12">

					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div id="load">

					  <?php echo $__env->make('admin.common.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

					</div>
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-rocket"></i>Applications
							</div>
							<div class="tools">
							</div>
						</div>

						<div class="portlet-body">


							<table class="table table-striped table-bordered table-hover" id="applications">
                                     <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Leave Type</th>
                                        <th>Reason</th>
                                        <th>Applied on</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                         <td>  </td>
                                         <td>  </td>
                                         <td>  </td>
                                         <td>  </td>
                                         <td>  </td>
                                         <td>  </td>
                                         <td>  </td>
                                         <td>  </td>
                                    </tr>

                                        </tbody>

							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->

				</div>
			</div>
			<!-- END PAGE CONTENT-->



<?php echo Form::open(['url'=>'','id'=>'edit_form_application','method'=>'PATCH']); ?>

<div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <span class="caption-subject font-red-sunglo bold uppercase">Leave Application</span>
                    </div>
                    <div class="modal-body" id="modal-data-application">
                        
                    </div>
                </div>

            </div>
        </div>
</div>
<?php echo Form::close(); ?>



			
                <?php echo $__env->make('admin.common.delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
<?php $__env->stopSection(); ?>



<?php $__env->startSection('footerjs'); ?>


<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
	<?php echo HTML::script("assets/global/plugins/select2/select2.min.js"); ?>

	  <?php echo HTML::script("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"); ?>

	<?php echo HTML::script("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"); ?>

	<?php echo HTML::script("assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"); ?>

    <?php echo HTML::script("assets/admin/pages/scripts/table-managed.js"); ?>

<!-- END PAGE LEVEL PLUGINS -->
<!-- END PAGE LEVEL PLUGINS -->





 <script>
        $('#applications').dataTable( {
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": "<?php echo e(URL::route('admin.leave_applications')); ?>",
            "aaSorting": [[ 1, "asc" ]],
            "aoColumns": [
                { 'sClass': 'center', "bSortable": true  },
                { 'sClass' : 'center',  "bSortable": true },
                { 'sClass': 'center', "bSortable": true },
                { 'sClass': 'center', "bSortable": true },
                { 'sClass': 'center', "bSortable": true },
                { 'sClass': 'center', "bSortable": true },
                { 'sClass': 'center', "bSortable": true },
                { 'sClass': 'center', "bSortable": false }
            ],
            "lengthMenu": [
                            [5, 15, 20, -1],
                            [5, 15, 20, "All"] // change per page values here
                        ],
            "sPaginationType": "full_numbers",
            "fnRowCallback": function( nRow, aData, iDisplayIndex ) {
                var row = $(nRow);
                row.attr("id", 'row'+aData['0']);
            }

        });



        function del(id)
		{

			$('#deleteModal').appendTo("body").modal('show');
			$('#info').html('Are you sure ! You want to delete?');
			$("#delete").click(function()
			{
						var url = "<?php echo e(route('admin.leave_applications.destroy',':id')); ?>";
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

       function show_application(id)
       {
        	$("#modal-data-application").html('<div class="text-center"><?php echo HTML::image('assets/admin/layout/img/loading-spinner-blue.gif'); ?></div>');

		   var editUrl = "<?php echo e(route('admin.leave_applications.update',[':id'])); ?>";
		   editUrl = editUrl.replace(':id', id);
            $('#edit_form_application').attr('action', editUrl );
			var url = "<?php echo e(route('admin.leave_applications.show',':id')); ?>";
			url = url.replace(':id',id);
            $.ajax({
                    type: "GET",
                    url : url

                    }).done(function(response)
                    {
                                $('#modal-data-application').html(response);
//
                     });
       }
    </script>

</script>
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('admin.adminlayouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>