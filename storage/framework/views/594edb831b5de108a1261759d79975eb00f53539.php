<?php $__env->startSection('head'); ?>

    <!-- BEGIN PAGE LEVEL STYLES -->
        <?php echo HTML::style("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"); ?>

        <?php echo HTML::style("assets/global/plugins/select2/select2.css"); ?>

        <?php echo HTML::style("assets/global/plugins/jquery-multi-select/css/multi-select.css"); ?>

        <?php echo HTML::style("assets/global/plugins/fullcalendar/fullcalendar.min.css"); ?>

    <!-- BEGIN THEME STYLES -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainarea'); ?>



            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title">
            Dashboard <small>reports & statistics</small>
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="<?php echo e(route('admin.dashboard.index')); ?>">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                </ul>

            </div>
            <!-- END PAGE HEADER-->






			<div class="row">
        				<div class="col-md-12">
        					<div class="portlet box blue calendar">
        						<div class="portlet-title">
        							<div class="caption">
        								<i class="fa fa-gift"></i><?php echo Lang::get('core.attendance'); ?>

        							</div>
        						</div>
        						<div class="portlet-body">
        							<div class="row">

        								<div class="col-md-9 col-sm-12">
        									<div id="calendar" class="has-toolbar">
        									</div>
        								</div>
        								<div class="col-md-3 col-sm-3">
											<p><h3><a href="#" class="btn btn-sm red"></a> <?php echo Lang::get('core.absent'); ?></h3></p>
											<p><h3><a href="#" class="btn btn-sm blue"></a> <?php echo Lang::get('core.present'); ?></h3></p>

										</div>
        							</div>
        							<!-- END CALENDAR PORTLET-->
        						</div>
        					</div>
        				</div>

</div>


            <!-- BEGIN DASHBOARD STATS -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
							Expense Report
                        </div>
                    </div>
                    <div class="portlet-body">
					  <div id="expenseChart" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </div>
                </div>

                </div>


            <!-- END DASHBOARD STATS -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footerjs'); ?>


        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <?php echo HTML::script("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"); ?>

        <?php echo HTML::script("assets/global/plugins/bootstrap-select/bootstrap-select.min.js"); ?>

        <?php echo HTML::script("assets/global/plugins/select2/select2.min.js"); ?>


        <?php echo HTML::script("assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"); ?>

        <?php echo HTML::script("assets/admin/pages/scripts/components-dropdowns.js"); ?>



		<?php echo HTML::script('assets/admin/pages/scripts/ui-blockui.js'); ?>

        <?php echo HTML::script("assets/global/plugins/moment.min.js"); ?>

        <?php echo HTML::script("assets/global/plugins/fullcalendar/fullcalendar.min.js"); ?>

		<script src="http://code.highcharts.com/highcharts.js"></script>
		<script src="http://code.highcharts.com/modules/exporting.js"></script>



<script>
jQuery(document).ready(function() {

   Calendar.init();
//   showReport();
   UIBlockUI.init();
   ComponentsDropdowns.init();

});


var Calendar = function() {


    return {
        //main function to initiate the module
        init: function() {
            Calendar.initCalendar();


        },

        initCalendar: function() {

            if (!jQuery().fullCalendar) {
                return;
            }

            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();

            var h = {};


                if ($('#calendar').parents(".portlet").width() <= 720) {
                                    $('#calendar').addClass("mobile");
                                    h = {
                                        left: 'title, prev, next',
                                        center: '',
                                        right: 'today,month'
                                    };
                                } else {
                                    $('#calendar').removeClass("mobile");
                                    h = {
                                        left: 'title',
                                        center: '',
                                        right: 'prev,next,today'
                                    };
                                }

            $('#calendar').fullCalendar('destroy'); // destroy the calendar
            $('#calendar').fullCalendar({ //re-initialize the calendar
               header: h,
			   defaultView: 'month',
			   		eventRender: function(event, element) {
               						if(event.className=="holiday"){
               							var dataToFind = moment(event.start).format('YYYY-MM-DD');
                                           	$('.fc-day[data-date="'+dataToFind+'"]').css('background', 'rgba(255, 224, 205, 1)');
                                           }
               				},
                events: [
                
					 <?php $__currentLoopData = $holidays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $holiday): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					 {
					     className:"holiday",
						 title: "<?php echo e($holiday->occassion); ?>",
						 start:'<?php echo e($holiday->date); ?>',

						 color: 'grey'

					 },

					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    				    
                        <?php $__currentLoopData = $attendance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$attend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<?php if($attend[0]!='all present'): ?>
								<?php $__currentLoopData = $attend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $em): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								 {
									title: " <?php echo e(\Illuminate\Support\Str::words($em,1,'')); ?>",
									start:'<?php echo e($index); ?>',
										color: '#e50000'

								},
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php else: ?>
							{
								title: 'all present',
								start:'<?php echo e($index); ?>'

							},
                            <?php endif; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					]
            });
        }
    };
}();

$(function () {

    $('#expenseChart').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Expense Report '+new Date().getFullYear()
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
            useHTML: true,
                text: 'Expense in ( <span class="fa <?php echo $setting->currency_icon; ?>"></span> )'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} <span class="fa <?php echo $setting->currency_icon; ?>"></span></b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [  {
            name: 'Expense',
//            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8,'']
//            data: ['','',100]
            data: [<?php echo $expense; ?>]

        }]
    });
});
</script>

        <!-- END PAGE LEVEL PLUGINS -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlayouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>