@extends('admin.adminlayouts.adminlayout')

@section('head')

    <!-- BEGIN PAGE LEVEL STYLES -->
    {!! HTML::style('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}
    {!! HTML::style('assets/global/plugins/bootstrap-datepicker/css/datepicker3.css') !!}
    <!-- END PAGE LEVEL STYLES -->

@stop


@section('mainarea')
    @php
        use Illuminate\Support\Facades\Input
    @endphp

    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
        <span class="fa fa-plus"></span> New Employee
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="{{route('admin.employees.index')}}">Employees</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">New Employee</a>
            </li>
        </ul>
    </div>
    <!-- END PAGE HEADER-->

    @if(count($department)==0)
        <div class="note note-warning">
            {!! Lang::get('messages.noDept') !!}
        </div>
    @else
        <div class="row">
            <div class="col-md-6">


            </div>
            <div class="col-md-6 form-group text-right">

                <span id="load_notification"></span>
                <input type="checkbox" onchange="ToggleEmailNotification('employee_add');return false;"
                       class="make-switch" name="employee_add" @if($setting->employee_add==1)checked
                       @endif data-on-color="success" data-on-text="Yes" data-off-text="No" data-off-color="danger">
                <strong>Email Notification</strong><br>


            </div>
        </div>

        {{--INLCUDE ERROR MESSAGE BOX--}}
        @include('admin.common.error')
        {{--END ERROR MESSAGE BOX--}}
        <hr>
        <div class="clearfix">
        </div>
        {!! Form::open(array('route'=>"admin.employees.store",'class'=>'form-horizontal','method'=>'POST','files' => true)) !!}
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
                            <div class="form-group ">
                                <label class="control-label col-md-3">Photo</label>
                                <div class="col-md-9">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
                                                 alt=""/>

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
                                <label class="col-md-3 control-label">Name <span class="required">* </span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="fullName" placeholder="Employee Name"
                                           value="{{ Input::old('fullName') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Father's Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="placeOfBirth" placeholder="Place of Birth">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Date of Birth</label>
                                <div class="col-md-3">
                                    <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy"
                                         data-date-viewmode="years">
                                        <input type="text" class="form-control" name="date_of_birth" readonly
                                               value="{{ Input::old('date_of_birth') }}">
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
                                    {!!  Form::select('gender', array('male' => 'Male', 'female' => 'Female'), Input::old('gender'),array('class'=>'form-control'))  !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Phone</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="mobileNumber"
                                           placeholder="Contact Number" value="{{Input::old('mobileNumber')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Local Address</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="localAddress"
                                              rows="3">{{Input::old('localAddress')}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Permanent Address</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="permanentAddress"
                                              rows="3">{{Input::old('permanentAddress')}}</textarea>
                                </div>
                            </div>

                            <h4><strong>Account Login</strong></h4>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Email<span class="required">* </span></label>
                                <div class="col-md-9">
                                    <input type="text" name="email" class="form-control"
                                           value="{{ Input::old('email') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Password<span class="required">* </span></label>
                                <div class="col-md-9">
                                    <input type="hidden" name="oldpassword">
                                    <input type="text" name="password" class="form-control"
                                           value="{{ Input::old('password') }}">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="portlet box purple-wisteria">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-calendar"></i>Documents
                        </div>

                    </div>
                    <div class="portlet-body">

                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-2">Resume</label>
                                <div class="col-md-5">
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

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Offer Letter</label>
                                <div class="col-md-5">
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

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Joining Letter</label>
                                <div class="col-md-5">
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

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Contract and Agreement</label>
                                <div class="col-md-5">
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

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">ID Proof</label>
                                <div class="col-md-5">
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

                            </div>
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

                    </div>
                    <div class="portlet-body">

                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Employee ID<span
                                            class="required">* </span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="employeeID" placeholder="Employee ID"
                                           value="{{Input::old('employeeID')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Department</label>
                                <div class="col-md-9">
                                    {!!  Form::select('department', $department,null,['class' => 'form-control select2me','id'=>'department','onchange'=>'dept();return false;'])  !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Designation</label>
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
                                               value="{{Input::old('joiningDate')}}">
                                        <span class="input-group-btn">
        												<button class="btn default" type="button"><i
                                                                    class="fa fa-calendar"></i></button>
        												</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Joining Salary</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="currentSalary"
                                           placeholder="Current Salary" value="{{ Input::old('currentSalary') }}">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="portlet box red-sunglo">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-calendar"></i>Bank Account Details
                        </div>

                    </div>
                    <div class="portlet-body">

                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Account Holder Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="accountName"
                                           placeholder="Account Holder Name" value="{{Input::old('accountName')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Account Number</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="accountNumber"
                                           placeholder="Account Number" value="{{Input::old('accountNumber')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Bank Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="bank" placeholder="BANK Name"
                                           value="{{Input::old('bank')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">IFSC Code</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="ifsc" placeholder="IFSC Code"
                                           value="{{Input::old('ifsc')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">PAN Number </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="pan" placeholder="PAN Number"
                                           value="{{Input::old('pan')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Branch</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="branch" placeholder="BRANCH"
                                           value="{{Input::old('branch')}}">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="portlet box red-sunglo">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-calendar"></i>Educational Background
                        </div>

                    </div>
                    <div class="portlet-body">
                        <div id="education_background">
                            @if(Input::old('educationType'))
                                @foreach(Input::old('educationType') as $key => $value)
                                    <div class="form-body">
                                        <div class="clearfix">
                                            <h3 class="pull-left"><strong>{{ ['elementary' => 'Elementary', 'high_school' => 'High School', 'graduation' => 'Graduation', 'other' => 'Other'][$value] }}</strong></h3>
                                            <a href="javascript:;" @click="removeEducation()" class="btn btn-danger btn-education-remove pull-right education-remove float-right"><i class="fa fa-times"></i>Remove</a>
                                        </div>
                                        <input type="hidden" name="educationType[]" value="{{ $value }}">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Name of School<span
                                                        class="required">* </span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="schoolName[]" placeholder="Name of School"
                                                       value="{{Input::old('schoolName[]')[$key]}}">
                                            </div>
                                        </div>
                                        <h5><strong>Period of Attendance</strong></h5>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">From</label>
                                            <div class="col-md-9">
                                                <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy"
                                                     data-date-viewmode="years">
                                                    <input type="text" class="form-control" name="educationStart[]" readonly
                                                           value="{{Input::old('educationStart[]')[$key]}}">
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
                                                    <input type="text" class="form-control" name="educationStart[]" readonly
                                                           value="{{Input::old('educationStart[]')[$key]}}">
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
                                                           value="{{Input::old('educationGraduationYear[]')[$key]}}">
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
                                                       placeholder="Education Honors" value="{{ Input::old('eductionHonors[]')[$key] }}">
                                            </div>
                                        </div>
                                        <hr class="mb-5">
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        <div class="form-group" id="educationRepeater">
                            <label class="col-md-3 control-label">Type</label>
                            <div class="col-md-5">
                                {!!  Form::select('educationRepeater', ['elementary' => 'Elementary', 'high_school' => 'High School', 'graduation' => 'Graduation', 'other' => 'Other'],null,['class' => 'form-control select2me'])  !!}
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
            {{---------------Documents------------------}}
            <div class="form-actions text-center">
                <button type="submit" data-loading-text="Submitting..."
                        class="demo-loading-btn btn green">
                    <i class="fa fa-plus"></i> Submit
                </button>
            </div>
        </div>
        </form>
    @endif
    <hr>

    <div id="education_background_template" hidden>
        <div class="form-body mt-1">
            <div class="clearfix">
                <h3 class="pull-left"><strong>TypeHeading</strong></h3>
                <a href="javascript:;" @click="removeEducation()" class="btn btn-danger btn-education-remove pull-right education-remove float-right"><i class="fa fa-times"></i>Remove</a>
            </div>
            <input type="hidden" name="educationType[]" value="selectEducationType">

            <div class="form-group">
                <label class="col-md-3 control-label">Name of School<span
                            class="required">* </span></label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="schoolName[]" placeholder="Name of School">
                </div>
            </div>
            <h5><strong>Period of Attendance</strong></h5>
            <div class="form-group">
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
            <div class="form-group">
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
            <div class="form-group">
                <label class="control-label col-md-3">Year Graduated</label>
                <div class="col-md-3">
                    <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy"
                         data-date-viewmode="years">
                        <input type="text" class="form-control" name="educationGraduationYear[]" readonly>
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
                    <input type="text" class="form-control" name="eductionHonors[]">
                </div>
            </div>
            <hr class="mb-5">
        </div>
    </div>

@stop



@section('footerjs')


    <!-- BEGIN PAGE LEVEL PLUGINS -->
    {!! HTML::script('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}
    {!! HTML::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') !!}
    {!! HTML::script("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js") !!}
    {!! HTML::script('assets/admin/pages/scripts/components-pickers.js') !!}
    <!-- END PAGE LEVEL PLUGINS -->

    <script>
        jQuery(document).ready(function () {

            ComponentsPickers.init();
            dept();


        });

        function dept() {

            $.getJSON("{{ URL::to('admin/departments/ajax_designation/')}}",
                {deptID: $('#department').val()},
                function (data) {
                    var model = $('#designation');
                    model.empty();
                    $.each(data, function (index, element) {
                        model.append("<option value='" + element.id + "'>" + element.designation + "</option>");
                    });

                });

        }

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
@stop
