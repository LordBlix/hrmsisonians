<table width="100%" border="1" style="border-collapse:collapse; border-color:white;">
		<tr>
	    	<td style="background-color:black;padding:10px;">
	    		 <?php echo HTML::image("assets/admin/layout/img/logo-big.png",'Logo',array('class'=>'logo-default','height'=>'30px','width'=>'117px')); ?>

	    	</td>
	    </tr>
	    <tr>
	    	<td style="padding:10px;">Hi!

	    	<b> <?php echo e(\Illuminate\Support\Str::words($employee_name,1,'')); ?></b> Your account is created on <?php echo e($setting->website); ?><br /><br/>
			 <p>Your Login details as below!</p>

			  <p><strong>Email</strong>:  <?php echo e($employee_email); ?></p>
			  <p><strong>Password</strong>: <?php echo e($employee_password); ?></p>
			  <br />
			  <br />
			  <p>Try Logging at <a href="<?php echo e(URL::to('/')); ?>"><?php echo e(URL::to('/')); ?></a></p>
<hr>
	       <b> <?php echo e($setting->website); ?></b><br />
	        <font size="1"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(URL::to('/')); ?></a><br />
	        </font>
	        </td>
	    </tr>
</table>
