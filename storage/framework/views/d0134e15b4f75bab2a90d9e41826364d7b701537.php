<?php $__env->startSection('head'); ?>

    <!-- BEGIN PAGE LEVEL STYLES -->
    <?php echo HTML::style('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css'); ?>

    <?php echo HTML::style('assets/global/plugins/bootstrap-datepicker/css/datepicker3.css'); ?>

    <!-- END PAGE LEVEL STYLES -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('mainarea'); ?>
    <?php
        use Illuminate\Support\Facades\Input
    ?>

    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title" xmlns="http://www.w3.org/1999/html">
        Employee Details
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="<?php echo e(route('admin.employees.index')); ?>">Employees</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="">Edit Employee </a>

            </li>
        </ul>
    </div>
    <!-- END PAGE HEADER-->
    <div class="clearfix">
    </div>
    <div class="row ">
        <div class="col-md-6 col-sm-6">
            <div class="portlet box purple-wisteria">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-calendar"></i>Personal Details
                    </div>
                    <div class="actions">

                        <a href="javascript:;" onclick="$('#personal_details_form').submit();"
                           data-loading-text="Updating..." class="demo-loading-btn btn btn-sm btn-default ">
                            <i class="fa fa-save"></i> Save </a>
                    </div>
                </div>


                <div class="portlet-body">


                    

                    <?php echo Form::open(['method' => 'PATCH','route'=> ['admin.employees.update', $employee->employeeID],'class'   =>  'form-horizontal','id'  =>  'personal_details_form','files'=>true]); ?>

                    <input type="hidden" name="updateType" class="form-control" value="personalInfo">

                    <?php if(Session::get('successPersonal')): ?>
                        <div class="alert alert-success"><i
                                    class="fa fa-check"></i> <?php echo Session::get('successPersonal'); ?></div>
                    <?php endif; ?>


                    <?php if(Session::get('errorPersonal')): ?>

                        <div class="alert alert-danger alert-dismissable ">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <?php $__currentLoopData = Session::get('errorPersonal'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p><strong><i class="fa fa-warning"></i></strong> <?php echo e($error); ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>


                    <div class="form-body">
                        <div class="form-group ">
                            <label class="control-label col-md-3">Photo</label>
                            <div class="col-md-9">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        <?php echo HTML::image("/profileImages/{$employee->profileImage}",'ProfileImage'); ?>

                                        <input type="hidden" name="hiddenImage" value="<?php echo e($employee->profileImage); ?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                         style="max-width: 200px; max-height: 150px;">
                                    </div>
                                    <div>
        													<span class="btn default btn-file">
        													<span class="fileinput-new">
        													Select image </span>
        													<span class="fileinput-exists">
        													Change </span>
        													<input type="file" name="profileImage">
        													</span>
                                        <a href="#" class="btn red fileinput-exists" data-dismiss="fileinput">
                                            Remove </a>
                                    </div>
                                </div>

                                <div class="clearfix margin-top-10">
                                                            <span class="label label-danger">
                                                            NOTE! </span> Image Size must be (872px by 724px)

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Name<span class="required">* </span></label>
                            <div class="col-md-9">
                                <input type="text" name="fullName" class="form-control" value="<?php echo e($employee->fullName); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Father's Name</label>
                            <div class="col-md-9">
                                <input type="text" name="fatherName" class="form-control"
                                       value="<?php echo e($employee->fatherName); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Date of Birth</label>
                            <div class="col-md-3">
                                <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy"
                                     data-date-viewmode="years">
                                    <input type="text" class="form-control" name="date_of_birth" readonly
                                           value="<?php if(empty($employee->date_of_birth)): ?><?php else: ?><?php echo e(date('d-m-Y',strtotime($employee->date_of_birth))); ?><?php endif; ?>">
                                    <span class="input-group-btn">
        												<button class="btn default" type="button"><i
                                                                    class="fa fa-calendar"></i></button>
        												</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Gender</label>
                            <div class="col-md-9">
                                <select class="form-control" name="gender">

                                    <option value="male" <?php if($employee->gender=='male'): ?> selected <?php endif; ?>>Male</option>
                                    <option value="female" <?php if($employee->gender=='female'): ?> selected <?php endif; ?>>Female
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Phone</label>
                            <div class="col-md-9">
                                <input type="text" name="mobileNumber" class="form-control"
                                       value="<?php echo e($employee->mobileNumber); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Address</label>
                            <div class="col-md-9">
                                <textarea name="localAddress" class="form-control"
                                          rows="3"><?php echo e($employee->localAddress); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Permanent Address</label>
                            <div class="col-md-9">
                                <textarea name="permanentAddress" class="form-control"
                                          rows="3"><?php echo e($employee->permanentAddress); ?></textarea>
                            </div>
                        </div>
                        <h4><strong>Account Login</strong></h4>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email<span class="required">* </span></label>
                            <div class="col-md-9">
                                <input type="text" name="email" class="form-control" value="<?php echo e($employee->email); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password</label>
                            <div class="col-md-9">
                                <input type="hidden" name="oldpassword" value="<?php echo e($employee->password); ?>">
                                <input type="text" name="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>

            <div class="portlet box purple-wisteria">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-calendar"></i>Documents
                    </div>
                    <div class="actions">
                        <button onclick="$('#documents_details_form').submit();" data-loading-text="Updating..."
                                class="demo-loading-btn btn btn-sm btn-default ">
                            <i class="fa fa-save"></i> Save
                        </button>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="portlet-body">
                        

                        <?php echo Form::open(['method' => 'PATCH','route'=> ['admin.employees.update', $employee->employeeID],'class'   =>  'form-horizontal','id'  =>  'documents_details_form','files'=>true]); ?>

                        <input type="hidden" name="updateType" class="form-control" value="documents">

                        <?php if(Session::get('successDocuments')): ?>
                            <div class="alert alert-success"><i
                                        class="fa fa-check"></i> <?php echo Session::get('successDocuments'); ?></div>
                        <?php endif; ?>

                        <?php if(Session::get('errorDocuments')): ?>
                            <div class="alert alert-danger"><i
                                        class="fa fa-warning"></i> <?php echo Session::get('errorDocuments'); ?></div>
                        <?php endif; ?>

                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-2">Resume</label>
                                <div class="col-md-6">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="input-group input-large">
                                            <div class="form-control uneditable-input" data-trigger="fileinput">
                                                <i class="fa fa-file fileinput-exists"></i>&nbsp; <span
                                                        class="fileinput-filename">
        														</span>
                                            </div>
                                            <span class="input-group-addon btn default btn-file">
        													<span class="fileinput-new">
        													Select file </span>
        													<span class="fileinput-exists">
        													Change </span>
        													<input type="file" name="resume">
        													</span>
                                            <a href="#" class="input-group-addon btn red fileinput-exists"
                                               data-dismiss="fileinput">
                                                Remove </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <?php if(isset($documents['resume'])): ?>
                                        <a href="https://docs.google.com/viewer?url=<?php echo e(URL::to('employee_documents/resume/'.$documents['resume'])); ?>"
                                           target="_blank" class="btn purple">View Resume</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Offer Letter</label>
                                <div class="col-md-6">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="input-group input-large">
                                            <div class="form-control uneditable-input" data-trigger="fileinput">
                                                <i class="fa fa-file fileinput-exists"></i>&nbsp; <span
                                                        class="fileinput-filename">
        														</span>
                                            </div>
                                            <span class="input-group-addon btn default btn-file">
        													<span class="fileinput-new">
        													Select file </span>
        													<span class="fileinput-exists">
        													Change </span>
        													<input type="file" name="offerLetter">
        													</span>
                                            <a href="#" class="input-group-addon btn red fileinput-exists"
                                               data-dismiss="fileinput">
                                                Remove </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <?php if(isset($documents['offerLetter'])): ?>
                                        <a href="https://docs.google.com/viewer?url=<?php echo e(URL::to('employee_documents/offerLetter/'.$documents['offerLetter'])); ?>"
                                           target="_blank" class="btn purple">Offer Letter</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Joining Letter</label>
                                <div class="col-md-6">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="input-group input-large">
                                            <div class="form-control uneditable-input" data-trigger="fileinput">
                                                <i class="fa fa-file fileinput-exists"></i>&nbsp; <span
                                                        class="fileinput-filename">
        														</span>
                                            </div>
                                            <span class="input-group-addon btn default btn-file">
        													<span class="fileinput-new">
        													Select file </span>
        													<span class="fileinput-exists">
        													Change </span>
        													<input type="file" name="joiningLetter">
        													</span>
                                            <a href="#" class="input-group-addon btn red fileinput-exists"
                                               data-dismiss="fileinput">
                                                Remove </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <?php if(isset($documents['joiningLetter'])): ?>
                                        <a href="https://docs.google.com/viewer?url=<?php echo e(URL::to('employee_documents/joiningLetter/'.$documents['joiningLetter'])); ?>"
                                           target="_blank" class="btn purple">View Joining Letter</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Contract and Agreement</label>
                                <div class="col-md-6">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="input-group input-large">
                                            <div class="form-control uneditable-input" data-trigger="fileinput">
                                                <i class="fa fa-file fileinput-exists"></i>&nbsp; <span
                                                        class="fileinput-filename">
        														</span>
                                            </div>
                                            <span class="input-group-addon btn default btn-file">
        													<span class="fileinput-new">
        													Select file </span>
        													<span class="fileinput-exists">
        													Change </span>
        													<input type="file" name="contract">
        													</span>
                                            <a href="#" class="input-group-addon btn red fileinput-exists"
                                               data-dismiss="fileinput">
                                                Remove </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <?php if(isset($documents['contract'])): ?>
                                        <a href="https://docs.google.com/viewer?url=<?php echo e(URL::to('employee_documents/contract/'.$documents['contract'])); ?>"
                                           target="_blank" class="btn purple">View Contract</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">ID Proof</label>
                                <div class="col-md-6">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="input-group input-large">
                                            <div class="form-control uneditable-input" data-trigger="fileinput">
                                                <i class="fa fa-file fileinput-exists"></i>&nbsp; <span
                                                        class="fileinput-filename">
        														</span>
                                            </div>
                                            <span class="input-group-addon btn default btn-file">
        													<span class="fileinput-new">
        													Select file </span>
        													<span class="fileinput-exists">
        													Change </span>
        													<input type="file" name="IDProof">
        													</span>
                                            <a href="#" class="input-group-addon btn red fileinput-exists"
                                               data-dismiss="fileinput">
                                                Remove </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <?php if(isset($documents['IDProof'])): ?>
                                        <a href="https://docs.google.com/viewer?url=<?php echo e(URL::to('employee_documents/IDProof/'.$documents['IDProof'])); ?>"
                                           target="_blank" class="btn purple">View ID Proof</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="portlet box red-sunglo">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-calendar"></i>Company Details
                    </div>
                    <div class="actions">
                        <a href="javascript:;"
                           onclick="UpdateDetails('<?php echo $employee->employeeID; ?>','company');return false"
                           data-loading-text="Updating..." class="demo-loading-btn-ajax btn btn-sm btn-default ">
                            <i class="fa fa-save"></i> Save </a>
                    </div>
                </div>
                <div class="portlet-body">

                    
                    <?php echo Form::open(['class'   =>  'form-horizontal','id'  =>  'company_details_form']); ?>

                    <input type="hidden" name="updateType" class="form-control" value="company">
                    <div id="alert_company">
                        
                        
                        
                    </div>

                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Employee ID<span class="required">* </span></label>
                            <div class="col-md-9">
                                <input type="text" name="employeeID" class="form-control" readonly
                                       value="<?php echo e($employee->employeeID); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Department<span class="required">* </span></label>
                            <div class="col-md-9">
                                <?php echo Form::select('department', $department,$designation->deptID,['class' => 'form-control select2me','id'=>'department','onchange'=>'dept();return false;']); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Designation<span class="required">* </span></label>
                            <div class="col-md-9">

                                <select class="select2me form-control" name="designation" id="designation">

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Date of Joining</label>
                            <div class="col-md-3">
                                <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy"
                                     data-date-viewmode="years">
                                    <input type="text" class="form-control" name="joiningDate" readonly
                                           value="<?php if(empty($employee->joiningDate)): ?>00-00-0000 <?php else: ?> <?php echo e(date('d-m-Y',strtotime($employee->joiningDate))); ?> <?php endif; ?>">
                                    <span class="input-group-btn">
        												<button class="btn default" type="button"><i
                                                                    class="fa fa-calendar"></i></button>
        												</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Exit Date</label>
                            <div class="col-md-3">
                                <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy"
                                     data-date-viewmode="years">
                                    <input type="text" class="form-control" name="exit_date" readonly
                                           value="<?php if(empty($employee->exit_date)): ?> <?php else: ?> <?php echo e(date('d-m-Y',strtotime($employee->exit_date))); ?> <?php endif; ?>">
                                    <span class="input-group-btn">
                                                            <button class="btn default" type="button"><i
                                                                        class="fa fa-calendar"></i></button>
                                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Status</label>
                            <div class="col-md-3">
                                <input type="checkbox" value="active" onchange="remove_exit();" class="make-switch"
                                       name="status" <?php if($employee->status=='active'): ?>checked
                                       <?php endif; ?> data-on-color="success" data-on-text="Active" data-off-text="Inactive"
                                       data-off-color="danger">
                            </div>
                            <div class="col-md-6">
                                (<strong>Note:</strong>Status active will remove the exit date)
                            </div>
                        </div>

                        <hr>
                        <h4><strong>Salary ( <i class="fa <?php echo e($setting->currency_icon); ?>"></i> )</strong></h4>

                        <?php $__currentLoopData = $employee->getSalary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div id="salary<?php echo e($salary->id); ?>">
                                <div class="form-group">
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="type[<?php echo e($salary->id); ?>]"
                                               value="<?php echo e($salary->type); ?>">
                                    </div>

                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="salary[<?php echo e($salary->id); ?>]"
                                               value="<?php echo e($salary->salary); ?>">
                                    </div>

                                    <div class="col-md-2">
                                        <a class="btn btn-sm red"
                                           onclick="del('<?php echo e($salary->id); ?>','<?php echo e($salary->type); ?>')"><i
                                                    class="fa fa-trash"></i> </a>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <a class="" data-toggle="modal" href="#static">
                            Add Salary
                            <i class="fa fa-plus"></i> </a>
                    </div>
                    <?php echo Form::close(); ?>



                    

                </div>
            </div>

            <div class="portlet box red-sunglo">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-calendar"></i>Bank Account Details
                    </div>
                    <div class="actions">
                        <a href="javascript:;" onclick="UpdateDetails('<?php echo e($employee->employeeID); ?>','bank');return false"
                           data-loading-text="Updating..." class="demo-loading-btn-ajax btn btn-sm btn-default ">
                            <i class="fa fa-save"></i> Save </a>
                    </div>
                </div>
                <div class="portlet-body">

                    
                    <?php echo Form::open(['class'   =>  'form-horizontal','id'  =>  'bank_details_form']); ?>

                    <input type="hidden" name="updateType" class="form-control" value="bank">

                    <div id="alert_bank"></div>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Account Holder Name</label>
                            <div class="col-md-9">
                                <input type="text" name="accountName" class="form-control"
                                       value="<?php echo e(isset($bank_details->accountName) ? $bank_details->accountName : ''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Account Number</label>
                            <div class="col-md-9">
                                <input type="text" name="accountNumber" class="form-control"
                                       value="<?php echo e(isset($bank_details->accountNumber) ? $bank_details->accountNumber : ''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Bank Name</label>
                            <div class="col-md-9">
                                <input type="text" name="bank" class="form-control"
                                       value="<?php echo e(isset($bank_details->bank) ? $bank_details->bank : ''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">IFSC Code</label>
                            <div class="col-md-9">
                                <input type="text" name="ifsc" class="form-control"
                                       value="<?php echo e(isset($bank_details->ifsc) ? $bank_details->ifsc : ''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">PAN Number</label>
                            <div class="col-md-9">
                                <input type="text" name="pan" class="form-control" value="<?php echo e(isset($bank_details->pan) ? $bank_details->pan : ''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Branch</label>
                            <div class="col-md-9">
                                <input type="text" name="branch" class="form-control"
                                       value="<?php echo e(isset($bank_details->branch) ? $bank_details->branch : ''); ?>">
                            </div>
                        </div>
                    </div>
                    <?php echo Form::close(); ?>

                    


                </div>
            </div>

            <div class="portlet box red-sunglo">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-calendar"></i>Educational Background
                    </div>
                    <div class="actions">
                        <a href="javascript:;" onclick="UpdateDetails('<?php echo e($employee->employeeID); ?>','education');return false"
                           data-loading-text="Updating..." class="demo-loading-btn-ajax btn btn-sm btn-default ">
                            <i class="fa fa-save"></i> Save </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <?php echo Form::open(['class'   =>  'form-horizontal','id'  =>  'education_details_form','files'=>false]); ?>

                    <div id="education_background">
                        <div id="alert_education"></div>

                        <input type="hidden" name="updateType" class="form-control" value="education">

                        <?php if($educations): ?>
                            <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-body">
                                    <div class="clearfix">
                                        <h3 class="pull-left"><strong><?php echo e(['elementary' => 'Elementary', 'high_school' => 'High School', 'graduation' => 'Graduation', 'other' => 'Other'][$education->type]); ?></strong></h3>
                                        <a href="javascript:;" @click="removeEducation()" class="btn btn-danger btn-education-remove pull-right education-remove float-right"><i class="fa fa-times"></i>Remove</a>
                                    </div>
                                    <input type="hidden" name="educationType[]" value="<?php echo e($education->type); ?>">

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name of School<span
                                                    class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="schoolName[]" placeholder="Name of School"
                                                   value="<?php echo e($education->school); ?>">
                                        </div>
                                    </div>
                                    <h5><strong>Period of Attendance</strong></h5>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">From</label>
                                        <div class="col-md-9">
                                            <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy"
                                                 data-date-viewmode="years">
                                                <input type="text" class="form-control" name="educationStart[]" readonly
                                                       value="<?php echo e($education->start_date); ?>">
                                                <span class="input-group-btn">
                                            <button class="btn default" type="button"><i
                                                        class="fa fa-calendar"></i></button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">To</label>
                                        <div class="col-md-9">
                                            <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy"
                                                 data-date-viewmode="years">
                                                <input type="text" class="form-control" name="educationEnds[]" readonly
                                                       value="<?php echo e($education->end_date); ?>">
                                                <span class="input-group-btn">
                                            <button class="btn default" type="button"><i
                                                        class="fa fa-calendar"></i></button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Year Graduated</label>
                                        <div class="col-md-3">
                                            <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy"
                                                 data-date-viewmode="years">
                                                <input type="text" class="form-control" name="educationGraduationYear[]" readonly
                                                       value="<?php echo e($education->graduation_year); ?>">
                                                <span class="input-group-btn">
                                                    <button class="btn default" type="button"><i
                                                                class="fa fa-calendar"></i></button>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Honor's Received</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="eductionHonors[]"
                                                   placeholder="Education Honors" value="<?php echo e($education->honor_received); ?>">
                                        </div>
                                    </div>
                                    <hr class="mb-5">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                    <?php echo Form::close(); ?>

                    <div class="form-group clearfix" id="educationRepeater">
                        <label class="col-md-3 control-label">Type</label>
                        <div class="col-md-5">
                            <?php echo Form::select('educationRepeater', ['elementary' => 'Elementary', 'high_school' => 'High School', 'graduation' => 'Graduation', 'other' => 'Other'],null,['class' => 'form-control select2me']); ?>

                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-success btn-block"><i class="fa fa-plus"></i> Add Education</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">
        
        <?php echo $__env->make('admin.common.delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        

        

        <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title"><strong>New Salary</strong></h4>
                    </div>
                    <div class="modal-body">
                        <div class="portlet-body form">

                            <!-------------- BEGIN FORM------------>
                            <?php echo Form::open(array('route'=>"admin.salary.store",'class'=>'form-horizontal ','method'=>'POST')); ?>

                            <input type="hidden" name="employeeID" value="<?php echo e($employee->employeeID); ?>"/>

                            <div class="form-body">

                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input class="form-control form-control-inline" name="type" type="text" value=""
                                               placeholder="Type"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input class="form-control form-control-inline" type="text" name="salary"
                                               placeholder="Salary"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" data-loading-text="Updating..."
                                                class="demo-loading-btn btn green"><i class="fa fa-check"></i> Submit
                                        </button>

                                    </div>
                                </div>
                            </div>
                        <?php echo Form::close(); ?>

                        <!-- -----------END FORM-------->
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>

            </div>
        </div>

        
    </div>
    
    <div id="education_background_template" hidden>
        <div class="form-body">
            <div class="clearfix">
                <h3 class="pull-left"><strong>TypeHeading</strong></h3>
                <a href="javascript:;" @click="removeEducation()"
                   class="btn btn-danger btn-education-remove pull-right education-remove float-right"><i
                            class="fa fa-times"></i>Remove</a>
            </div>
            <input type="hidden" name="educationType[]" value="selectEducationType">

            <div class="form-group clearfix">
                <label class="col-md-3 control-label">Name of School<span
                            class="required">* </span></label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="schoolName[]" placeholder="Name of School">
                </div>
            </div>
            <h5><strong>Period of Attendance</strong></h5>
            <div class="form-group clearfix">
                <label class="col-md-3 control-label">From</label>
                <div class="col-md-9">
                    <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy"
                         data-date-viewmode="years">
                        <input type="text" class="form-control" name="educationStart[]" readonly>
                        <span class="input-group-btn">
                                                <button class="btn default" type="button"><i
                                                            class="fa fa-calendar"></i></button>
                                                </span>
                    </div>
                </div>
            </div>
            <div class="form-group clearfix">
                <label class="col-md-3 control-label">To</label>
                <div class="col-md-9">
                    <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy"
                         data-date-viewmode="years">
                        <input type="text" class="form-control" name="educationEnds[]" readonly>
                        <span class="input-group-btn">
                                                <button class="btn default" type="button"><i
                                                            class="fa fa-calendar"></i></button>
                                                </span>
                    </div>
                </div>
            </div>
            <div class="form-group clearfix">
                <label class="control-label col-md-3">Year Graduated</label>
                <div class="col-md-3">
                    <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy"
                         data-date-viewmode="years">
                        <input type="text" class="form-control" name="educationGraduationYear[]" readonly
                               value="<?php echo e(Input::old('educationGraduationYear[]')); ?>">
                        <span class="input-group-btn">
        												<button class="btn default" type="button"><i
                                                                    class="fa fa-calendar"></i></button>
        												</span>
                    </div>
                </div>
            </div>
            <div class="form-group clearfix">
                <label class="col-md-3 control-label">Honor's Received</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="eductionHonors[]"
                           placeholder="Education Honors">
                </div>
            </div>
            <hr class="mb-5">
        </div>
    </div>
    

<?php $__env->stopSection(); ?>



<?php $__env->startSection('footerjs'); ?>


    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <?php echo HTML::script('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js'); ?>

    <?php echo HTML::script("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"); ?>

    <?php echo HTML::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>

    <?php echo HTML::script('assets/admin/pages/scripts/components-pickers.js'); ?>


    <!-- END PAGE LEVEL PLUGINS -->




    <script>
        jQuery(document).ready(function () {
            ComponentsPickers.init();
            dept();

        });


        function dept() {

            $.getJSON("<?php echo e(route('admin.departments.ajax_designation')); ?>",
                {deptID: $('#department').val()},
                function (data) {
                    var model = $('#designation');
                    model.empty();
                    var selected = '';
                    var match = <?php echo e($employee->designation); ?>;
                    $.each(data, function (index, element) {
                        if (element.id == match) selected = 'selected';
                        else selected = '';
                        model.append("<option value='" + element.id + "' " + selected + ">" + element.designation + "</option>");
                    });

                });


        }

        // Javascript function to update the company info and Bank Info
        function UpdateDetails(id, type) {

            var form_id = '';
            var alert_div = '';

            if (type == 'bank') {
                form_id = '#bank_details_form';
                alert_div = '#alert_bank'

            } else if (type === 'education') {
                form_id = '#education_details_form';
                alert_div = '#alert_education'
            }
            else {
                form_id = '#company_details_form';
                alert_div = '#alert_company';
            }
            $(alert_div).html('<div class="alert alert-info"><span class="fa fa-info"></span> Submitting..</div>');
            var url = "<?php echo e(route('admin.employees.update',':id')); ?>";
            url = url.replace(':id', id);
            $.ajax({
                type: "PATCH",
                url: url,
                dataType: 'json',
                data: $(form_id).serialize()

            }).done(function (response) {
                $(alert_div).html('');
                if (response.status == "success") {
                    $(alert_div).html('<div class="alert alert-success alert-dismissable"><button class="close" data-close="alert"></button><span class="fa fa-check"></span> ' + response.msg + '</div>');

                } else if (response.status == "error") {
                    var arr = response.msg;
                    var alert = '';
                    $.each(arr, function (index, value) {
                        if (value.length != 0) {
                            alert += '<p><span class="fa fa-warning"></span> ' + value + '</p>';

                        }
                    });

                    $(alert_div).append('<div class="alert alert-danger alert-dismissable"><button class="close" data-close="alert"></button> ' + alert + '</div>');
                }
            });
        }

        function del(id, type) {

            var alert_div = '#alert_company';
            $('#deleteModal').appendTo("body").modal('show');
            $('#info').html('Are you sure ! You want to delete <strong>' + type + '</strong> Salary??.');
            $("#delete").click(function () {
                var url = "<?php echo e(route('admin.salary.destroy',':id')); ?>";
                url = url.replace(':id', id);
                $.ajax({

                    type: "DELETE",
                    url: url,
                    dataType: 'json',
                    data: {"id": id}

                }).done(function (response) {
                    if (response.success == "deleted") {
                        $('#deleteModal').modal('hide');
                        $('#salary' + id).remove();
                        $(alert_div).html('<div class="alert alert-success alert-dismissable"><button class="close" data-close="alert"></button><span class="fa fa-check"></span> ' + response.msg + '</div>');
                    }
                });
            })

        }

        function remove_exit() {
            if ($("input[name=status]:checked").val() == "active") {
                $("input[name=exit_date]").val("");
            }
        }


        $("input[name=exit_date]").change(function () {
            $("input[name=status]").bootstrapSwitch('state', false);

        });

        $('#educationRepeater button').on('click', function () {
            var type = $('#educationRepeater select').val();
            var html = $('#education_background_template').html();
            html = html.replace('selectEducationType', type);
            html = html.replace('TypeHeading', {'elementary': 'Elementary', 'high_school': 'High School', 'graduation': 'Graduation', 'other': 'Other'}[type]);
            $('#education_background').append(html);
            ComponentsPickers.init();
            removeEducation();
        });

        function removeEducation () {
            $('.education-remove').on('click', function () {
                $(this).closest('div.form-body').remove();
            })
        }

    </script>

    <?php if(Session::get('successDocuments')): ?>
        
        <script>
            $("html, body").animate({scrollTop: $(document).height()}, 2000);
        </script>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminlayouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>