<?php
        use Illuminate\Support\Facades\Input
    ?>
    <?php echo Form::open(array('route'=>"admin.vacant.store",'class'=>'form-horizontal','method'=>'POST')); ?>

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

                                                        