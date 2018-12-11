<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title><?php echo e($setting->website); ?> | Login Page</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- CSS Global Compulsory -->
    <?php echo HTML::style('front_assets/plugins/bootstrap/css/bootstrap.min.css'); ?>

    <?php echo HTML::style('front_assets/css/style.css'); ?>


    <!-- CSS Implementing Plugins -->
    <?php echo HTML::style('front_assets/plugins/line-icons/line-icons.css'); ?>

    <?php echo HTML::style('front_assets/plugins/font-awesome/css/font-awesome.min.css'); ?>


    <!-- CSS Page Style -->
    <?php echo HTML::style('front_assets/css/pages/page_log_reg_v2.css'); ?>


    <!-- CSS Theme -->
    <?php echo HTML::style('front_assets/css/theme-colors/default.css'); ?>


    <!-- CSS Customization -->
    <?php echo HTML::style('front_assets/css/custom.css'); ?>

</head> 

<body>
<!--=== Content Part ===-->    
<div class="container">
    <!--Reg Block-->
    <?php echo Form::open(array('id'=>'login-form')); ?>

    <div class="reg-block">
        <div class="reg-block-header">
            <h2>  <?php echo HTML::image("assets/admin/layout/img/logo-big.png",'Logo',array('class'=>'logo-default','height'=>'30px','width'=>'117px')); ?></h2>
            
        </div>
        <div id="alert"></div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <hr>


        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <button type="submit" class="btn-u btn-block input-group" id="submitbutton" onclick="login();return false;">Log In</button>
            </div>
        </div>
    </div>
    <!--End Reg Block-->
    <?php echo Form::close(); ?>

</div><!--/container-->
<!--=== End Content Part ===-->
<!-- JS Global Compulsory -->
<?php echo HTML::script('front_assets/plugins/jquery/jquery.min.js'); ?>

<?php echo HTML::script('front_assets/plugins/jquery/jquery-migrate.min.js'); ?>

<?php echo HTML::script('front_assets/plugins/bootstrap/js/bootstrap.min.js'); ?>


<!-- JS Implementing Plugins -->
<?php echo HTML::script('front_assets/plugins/back-to-top.js'); ?>

<?php echo HTML::script('front_assets/plugins/backstretch/jquery.backstretch.min.js'); ?>


<script type="text/javascript">
    $.backstretch([
    "<?php echo e(URL::asset('front_assets/img/bg/5.jpg')); ?>",
    "<?php echo e(URL::asset('front_assets/img/bg/4.jpg')); ?>"

    ], {
        fade: 1000,
        duration: 7000
    });
</script>

<!--[if lt IE 9]>
<?php echo HTML::script('front_assets/plugins/respond.js'); ?>

<?php echo HTML::script('front_assets/plugins/html5shiv.js'); ?>

<?php echo HTML::script('front_assets/js/plugins/placeholder-IE-fixes.js'); ?>



<![endif]-->
<!-- JS Customization -->

<script>
    function login(){

        $('#alert').html('<div class="alert alert-info"><span class="fa fa-info"></span> <?php echo Lang::get('messages.submitting'); ?></div>');
        $("#submitbutton").prop('disabled', true);

        $.ajax({
            type: "POST",
            url: " <?php echo e(URL::to('/login')); ?> ",
            dataType: 'json',
            data: $('#login-form').serialize()

        }).done( function( response ) {

            $('#alert').html('');
            if(response.status == "success")
            {
                $('#alert').html('<div class="alert alert-success alert-dismissable"><span class="fa fa-check"></span> '+response.msg+'</div>');
                $('.input-group').remove();
                $('#submitbutton').remove();
                window.location.href= "<?php echo e(route('dashboard.index')); ?>";
            }
            else if(response.status == "error")
            {

                var arr = response.msg;
                var alert1 ='';

                $("#submitbutton").prop('disabled', false);

                $.each(arr, function(index, value)
                {
                    if (value.length != 0)
                    {
                        alert1 += '<p>&#10006;  '+ value+ '</p>';

                    }
                });

                $('#alert').html('<div class="alert alert-danger alert-dismissable"> '+alert1+'</div>');

            }

        });
    }

</script>
</body>
</html> 