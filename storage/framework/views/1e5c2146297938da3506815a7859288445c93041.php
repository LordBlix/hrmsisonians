<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>

<?php echo HTML::script("assets/global/plugins/respond.min.js"); ?>

<?php echo HTML::script("assets/global/plugins/excanvas.min.js"); ?>


<![endif]-->
<?php echo HTML::script("assets/global/plugins/jquery.min.js"); ?>

<?php echo HTML::script("assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js"); ?>

<?php echo HTML::script("assets/global/plugins/bootstrap/js/bootstrap.min.js"); ?>

<?php echo HTML::script("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"); ?>

<?php echo HTML::script("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"); ?>



<?php echo HTML::script("assets/global/scripts/metronic.js"); ?>

<?php echo HTML::script("assets/admin/layout/scripts/layout.js"); ?>



<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
    $('.demo-loading-btn')
                       .click(function () {
                         var btn = $(this)
                         btn.button('loading')
                         setTimeout(function () {
                           btn.button('reset')
                         }, 8000)
                     });
    $('.demo-loading-btn-ajax')
                           .click(function () {
                             var btn = $(this)
                             btn.button('loading')
                             setTimeout(function () {
                               btn.button('reset')
                             }, 500)
                         });


});

     function ToggleEmailNotification(type){
			 if ($('[name='+type+']').is(':checked')){
			  var value = 1;
			 }
			 else {
			  var value = 0;
			 }
			 $('#load_notification').html('<?php echo HTML::image('assets/admin/layout/img/loading-spinner-blue.gif'); ?>');


			 $.ajax({
				 type: 'POST',
				 url: "<?php echo e(route('admin.ajax_update_notification')); ?>",
				 dataType: "JSON",
				 data: {'value':value,'id':'<?php echo e($setting->id); ?>','type':type
				 },
				 success: function(response) {
					if(response.success=='success'){
						$('#load_notification').html('');
					}
				 },
				 error: function(xhr, textStatus, thrownError) {
					alert('Data Fetching error');
				 }
			 });

     }
</script>

<?php echo $__env->yieldContent('footerjs'); ?>
