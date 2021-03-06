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
                <a href="{{route('admin.employees.index')}}">Employees</a>
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
                        <i class="fa fa-calendar"></i>Personal Information
                    </div>
                    <div class="actions">

                        <a href="javascript:;" onclick="$('#personal_details_form').submit();"
                           data-loading-text="Updating..." class="demo-loading-btn btn btn-sm btn-default ">
                            <i class="fa fa-save"></i> Save </a>
                    </div>
                </div>


                <div class="portlet-body">


                    {{--------------------Personal Info Form--------------------------------------------}}

                    {!! Form::open(['method' => 'PATCH','route'=> ['admin.employees.update', $employee->employeeID],'class'   =>  'form-horizontal','id'  =>  'personal_details_form','files'=>true]) !!}
                    <input type="hidden" name="updateType" class="form-control" value="personalInfo">

                    @if(Session::get('successPersonal'))
                        <div class="alert alert-success"><i
                                    class="fa fa-check"></i> {!! Session::get('successPersonal') !!}</div>
                    @endif


                    @if (Session::get('errorPersonal'))

                        <div class="alert alert-danger alert-dismissable ">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            @foreach (Session::get('errorPersonal') as $error)
                                <p><strong><i class="fa fa-warning"></i></strong> {{ $error }}</p>
                            @endforeach
                        </div>
                    @endif


                    <div class="form-body">
                        <div class="form-group ">
                            <label class="control-label col-md-3">Photo</label>
                            <div class="col-md-9">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        {!! HTML::image("/profileImages/{$employee->profileImage}",'ProfileImage') !!}
                                        <input type="hidden" name="hiddenImage" value="{{$employee->profileImage}}">
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
                                <input type="text" name="fullName" class="form-control" value="{{$employee->fullName}}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3">Date of Birth</label>
                            <div class="col-md-3">
                                <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy"
                                     data-date-viewmode="years">
                                    <input type="text" class="form-control" name="date_of_birth" readonly
                                           value="@if(empty($employee->date_of_birth))@else{{date('d-m-Y',strtotime($employee->date_of_birth))}}@endif">
                                    <span class="input-group-btn">
        												<button class="btn default" type="button"><i
                                                                    class="fa fa-calendar"></i></button>
        												</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Place of Birth</label>
                            <div class="col-md-9">
                                <input type="text" name="placeOfBirth" class="form-control"
                                       value="{{$employee->place_of_birth}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Sex</label>
                            <div class="col-md-9">
                                <select class="form-control" name="sex">

                                    <option value="male" @if($employee->sex=='male') selected @endif>Male</option>
                                    <option value="female" @if($employee->sex=='female') selected @endif>Female
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Civil Status</label>
                            <div class="col-md-9">
                            <select class="form-control" name="civilStatus" id="">
                            <option value="Single" @if($employee->civil_status=='Single') selected @endif>Single</option>
                            <option value="Married" @if($employee->civil_status=='Married') selected @endif>Married</option>
                            <option value="Widowed" @if($employee->civil_status=='Widowed') selected @endif>Widowed</option>
                            <option value="Separated" @if($employee->civil_status=='Separated') selected @endif>Separated</option>
                            <option value="Others" @if($employee->civil_status=='Others') selected @endif>Others</option>
                            </select>
                             </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Height</label>
                            <div class="col-md-9">
                                <input type="text" name="height" class="form-control"
                                value="{{$employee->Height}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Weight</label>
                            <div class="col-md-9">
                                <input name="weight" class="form-control"
                                        value="{{$employee->Weight}}">
                            </div>
                        </div>
                        <h4><strong>Account Login</strong></h4>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email<span class="required">* </span></label>
                            <div class="col-md-9">
                                <input type="text" name="email" class="form-control" value="{{$employee->email}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password</label>
                            <div class="col-md-9">
                                <input type="hidden" name="oldpassword" value="{{$employee->password}}">
                                <input type="text" name="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
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
                        {{--------------------Documents Info Form--------------------------------------------}}

                        {!! Form::open(['method' => 'PATCH','route'=> ['admin.employees.update', $employee->employeeID],'class'   =>  'form-horizontal','id'  =>  'documents_details_form','files'=>true]) !!}
                        <input type="hidden" name="updateType" class="form-control" value="documents">

                        @if(Session::get('successDocuments'))
                            <div class="alert alert-success"><i
                                        class="fa fa-check"></i> {!! Session::get('successDocuments') !!}</div>
                        @endif

                        @if(Session::get('errorDocuments'))
                            <div class="alert alert-danger"><i
                                        class="fa fa-warning"></i> {!! Session::get('errorDocuments') !!}</div>
                        @endif

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
                                    @if(isset($documents['resume']))
                                        <a href="https://docs.google.com/viewer?url={{URL::to('employee_documents/resume/'.$documents['resume'])}}"
                                           target="_blank" class="btn purple">View Resume</a>
                                    @endif
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
                                    @if(isset($documents['offerLetter']))
                                        <a href="https://docs.google.com/viewer?url={{URL::to('employee_documents/offerLetter/'.$documents['offerLetter'])}}"
                                           target="_blank" class="btn purple">Offer Letter</a>
                                    @endif
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
                                    @if(isset($documents['joiningLetter']))
                                        <a href="https://docs.google.com/viewer?url={{URL::to('employee_documents/joiningLetter/'.$documents['joiningLetter'])}}"
                                           target="_blank" class="btn purple">View Joining Letter</a>
                                    @endif
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
                                    @if(isset($documents['contract']))
                                        <a href="https://docs.google.com/viewer?url={{URL::to('employee_documents/contract/'.$documents['contract'])}}"
                                           target="_blank" class="btn purple">View Contract</a>
                                    @endif
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
                                    @if(isset($documents['IDProof']))
                                        <a href="https://docs.google.com/viewer?url={{URL::to('employee_documents/IDProof/'.$documents['IDProof'])}}"
                                           target="_blank" class="btn purple">View ID Proof</a>
                                    @endif
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
                           onclick="UpdateDetails('{!! $employee->employeeID !!}','company');return false"
                           data-loading-text="Updating..." class="demo-loading-btn-ajax btn btn-sm btn-default ">
                            <i class="fa fa-save"></i> Save </a>
                    </div>
                </div>
                <div class="portlet-body">

                    {{--------------------Company Form--------------------------------------------}}
                    {!! Form::open(['class'   =>  'form-horizontal','id'  =>  'company_details_form']) !!}
                    <input type="hidden" name="updateType" class="form-control" value="company">
                    <div id="alert_company">
                        {{--INLCUDE ERROR MESSAGE BOX--}}
                        {{--@include('admin.common.error')--}}
                        {{--END ERROR MESSAGE BOX--}}
                    </div>

                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Employee ID<span class="required">* </span></label>
                            <div class="col-md-9">
                                <input type="text" name="employeeID" class="form-control" readonly
                                       value="{{$employee->employeeID}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Department<span class="required">* </span></label>
                            <div class="col-md-9">
                                {!!  Form::select('department', $department,$designation->deptID,['class' => 'form-control select2me','id'=>'department','onchange'=>'dept();return false;'])  !!}
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
                                           value="@if(empty($employee->joiningDate))00-00-0000 @else {{date('d-m-Y',strtotime($employee->joiningDate))}} @endif">
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
                                           value="@if(empty($employee->exit_date)) @else {{date('d-m-Y',strtotime($employee->exit_date))}} @endif">
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
                                       name="status" @if($employee->status=='active')checked
                                       @endif data-on-color="success" data-on-text="Active" data-off-text="Inactive"
                                       data-off-color="danger">
                            </div>
                            <div class="col-md-6">
                                (<strong>Note:</strong>Status active will remove the exit date)
                            </div>
                        </div>

                        <hr>
                        <h4><strong>Salary ( <i class="fa {{$setting->currency_icon}}"></i> )</strong></h4>

                        @foreach($employee->getSalary as $salary)
                            <div id="salary{{$salary->id}}">
                                <div class="form-group">
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="type[{{$salary->id}}]"
                                               value="{{$salary->type}}">
                                    </div>

                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="salary[{{$salary->id}}]"
                                               value="{{$salary->salary}}">
                                    </div>

                                    <div class="col-md-2">
                                        <a class="btn btn-sm red"
                                           onclick="del('{{$salary->id}}','{{$salary->type}}')"><i
                                                    class="fa fa-trash"></i> </a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <a class="" data-toggle="modal" href="#static">
                            Add Salary
                            <i class="fa fa-plus"></i> </a>
                    </div>
                    {!! Form::close() !!}


                    {{----------------Company Form end -------------}}

                </div>
            </div>

            <div class="portlet box red-sunglo">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-calendar"></i>Bank Account Details
                    </div>
                    <div class="actions">
                        <a href="javascript:;" onclick="UpdateDetails('{{$employee->employeeID}}','bank');return false"
                           data-loading-text="Updating..." class="demo-loading-btn-ajax btn btn-sm btn-default ">
                            <i class="fa fa-save"></i> Save </a>
                    </div>
                </div>
                <div class="portlet-body">

                    {{--------------------Bank Account Form--------------------------------------------}}
                    {!! Form::open(['class'   =>  'form-horizontal','id'  =>  'bank_details_form']) !!}
                    <input type="hidden" name="updateType" class="form-control" value="bank">

                    <div id="alert_bank"></div>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Account Holder Name</label>
                            <div class="col-md-9">
                                <input type="text" name="accountName" class="form-control"
                                       value="{{$bank_details->accountName or ''}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Account Number</label>
                            <div class="col-md-9">
                                <input type="text" name="accountNumber" class="form-control"
                                       value="{{$bank_details->accountNumber or ''}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Bank Name</label>
                            <div class="col-md-9">
                                <input type="text" name="bank" class="form-control"
                                       value="{{$bank_details->bank or ''}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">IFSC Code</label>
                            <div class="col-md-9">
                                <input type="text" name="ifsc" class="form-control"
                                       value="{{$bank_details->ifsc or ''}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">PAN Number</label>
                            <div class="col-md-9">
                                <input type="text" name="pan" class="form-control" value="{{$bank_details->pan or ''}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Branch</label>
                            <div class="col-md-9">
                                <input type="text" name="branch" class="form-control"
                                       value="{{$bank_details->branch or '' }}">
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    {{-------------------Bank Account Form end-----------------------------------------}}


                </div>
            </div>

            <div class="portlet box red-sunglo">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-calendar"></i>Educational Background
                    </div>
                    <div class="actions">
                        <a href="javascript:;" onclick="UpdateDetails('{{$employee->employeeID}}','education');return false"
                           data-loading-text="Updating..." class="demo-loading-btn-ajax btn btn-sm btn-default ">
                            <i class="fa fa-save"></i> Save </a>
                    </div>
                </div>
                <div class="portlet-body">
                    {!! Form::open(['class'   =>  'form-horizontal','id'  =>  'education_details_form','files'=>false]) !!}
                    <div id="education_background">
                        <div id="alert_education"></div>

                        <input type="hidden" name="updateType" class="form-control" value="education">

                        @if($educations)
                            @foreach($educations as $key => $education)
                                <div class="form-body">
                                    <div class="clearfix">
                                        <h3 class="pull-left"><strong>{{ ['elementary' => 'Elementary', 'high_school' => 'High School', 'graduation' => 'Graduation', 'other' => 'Other'][$education->type] }}</strong></h3>
                                        <a href="javascript:;" @click="removeEducation()" class="btn btn-danger btn-education-remove pull-right education-remove float-right"><i class="fa fa-times"></i>Remove</a>
                                    </div>
                                    <input type="hidden" name="educationType[]" value="{{ $education->type }}">

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name of School<span
                                                    class="required">* </span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="schoolName[]" placeholder="Name of School"
                                                   value="{{$education->school}}">
                                        </div>
                                    </div>
                                    <h5><strong>Period of Attendance</strong></h5>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">From</label>
                                        <div class="col-md-9">
                                            <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy"
                                                 data-date-viewmode="years">
                                                <input type="text" class="form-control" name="educationStart[]" readonly
                                                       value="{{$education->start_date}}">
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
                                                       value="{{$education->end_date}}">
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
                                                       value="{{$education->graduation_year}}">
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
                                                   placeholder="Education Honors" value="{{ $education->honor_received }}">
                                        </div>
                                    </div>
                                    <hr class="mb-5">
                                </div>
                            @endforeach
                        @endif
                    </div>
                    {!! Form::close() !!}
                    <div class="form-group clearfix" id="educationRepeater">
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
        {{-------------DELETE MODAL CALLING------------}}
        @include('admin.common.delete')
        {{---------------DELETE MODAL CALLING END--------}}

        {{------------------------------------NEW SALARY ADD MODALS--------------------------------}}

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
                            {!! Form::open(array('route'=>"admin.salary.store",'class'=>'form-horizontal ','method'=>'POST')) !!}
                            <input type="hidden" name="employeeID" value="{{$employee->employeeID}}"/>

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
                        {!!  Form::close()  !!}
                        <!-- -----------END FORM-------->
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>

            </div>
        </div>

        {{------------------------------------END NEW SALARY ADD MODALS--------------------------------------}}
    </div>
    {{----------------------------------------Educational Details Template-----------------------------------}}
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
                               value="{{Input::old('educationGraduationYear[]')}}">
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
    {{--------------------------------------End Educational Details Template---------------------------------}}

@stop



@section('footerjs')


    <!-- BEGIN PAGE LEVEL PLUGINS -->
    {!!  HTML::script('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}
    {!!  HTML::script("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js") !!}
    {!!  HTML::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') !!}
    {!!  HTML::script('assets/admin/pages/scripts/components-pickers.js') !!}

    <!-- END PAGE LEVEL PLUGINS -->




    <script>
        jQuery(document).ready(function () {
            ComponentsPickers.init();
            dept();

        });


        function dept() {

            $.getJSON("{{ route('admin.departments.ajax_designation')}}",
                {deptID: $('#department').val()},
                function (data) {
                    var model = $('#designation');
                    model.empty();
                    var selected = '';
                    var match = {{ $employee->designation}};
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
            var url = "{{ route('admin.employees.update',':id') }}";
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
                var url = "{{ route('admin.salary.destroy',':id') }}";
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

    @if(Session::get('successDocuments'))
        {{--Move to bottom of page if success comes from documents--}}
        <script>
            $("html, body").animate({scrollTop: $(document).height()}, 2000);
        </script>
    @endif

@stop
