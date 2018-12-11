@extends('admin.adminlayouts.adminlayout')
@section('head')

    <!-- BEGIN PAGE LEVEL STYLES -->
    {!! HTML::style('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}
    {!! HTML::style('assets/global/plugins/bootstrap-datepicker/css/datepicker3.css') !!}
    
    {!! HTML::style("training/style.css") !!}
    <!-- END PAGE LEVEL STYLES -->

@stop

@section('mainarea')
    @php
        use Illuminate\Support\Facades\Input
    @endphp


   <!-- END PAGE LEVEL SCRIPTS -->


<!-- END HEAD -->
<!-- BEGIN BODY -->

   <!-- BEGIN HEADER -->

            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <h3 class="page-title">
			{{$pageTitle}} <small>{!! Lang::get('menu.learningList') !!}</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="{{route('admin.dashboard.index')}}">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="{{route('admin.competency.index')}}">{!! Lang::get('menu.learningList') !!}</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Competency List</a>
					</li>
				</ul>

			</div>
            {{--INLCUDE ERROR MESSAGE BOX--}}
        @include('admin.common.error')
        {{--END ERROR MESSAGE BOX--}}
       {{--@if(isset($link))--}}
      {{-- {{$link}}--}}
        
     {{--  @endif--}}
     <div class="container">
     <div class="row">
            <div class="col-md-18">
            @include('admin.include.sidebars')
          
                     <div class="tab-content">
                        <div class="{{ $tab1 or 'tab-pane'}}" id="tab_1">
                        {!! Form::open(array('route'=>"admin.competency.store",'class'=>'form-horizontal','method'=>'POST','files' => true)) !!}
                        <input type="hidden" name="updateType" class="form-control" value="Family">
                        <div class="form-group">
                                <label class="col-md-2 control-label">EmployeeID <span class="required">* </span></label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="employeeID" placeholder="Employee Name"
                                           value="{!! Session::get('errorr') or '' !!}">
                                </div>
                                    </div>
                                    <div class="form-group">
                                <label class="col-md-2 control-label">Spouse's Surname <span class="required">* </span></label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="employeeID" placeholder="Employee Name"
                                           value="{{ $errorr or ''}}">
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
                        </div>
                        <div class="tab-pane" id="tab_2">

                                                </div>
                        <div class="tab-pane" id="tab_3">
                                                </div>
                        <div class="tab-pane" id="tab_4">
                          
                        </div>
                        <div class="tab-pane" id="tab_5">
                           
                        </div>
                        <div class="tab-pane" id="tab_6">
                           
                        
                        </div>
                        <div class="tab-pane" id="tab_8">
                           
                        </div>
                        <div class="{{ $tab7 or 'tab-pane'}}" id="tab_7">
                        {!! Form::open(array('route'=>"admin.competency.store",'class'=>'form-horizontal','method'=>'POST','files' => true)) !!}
                        <input type="hidden" name="updateType" class="form-control" value="Personal">
                        <div class="form-group">
                                <label class="col-md-2 control-label">EmployeeID <span class="required">* </span></label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="employeeID" placeholder="Employee ID"
                                           value="{{ $errorr or '' }}">
                                </div>
                                    </div>
                                    <div class="clearfix">
                                    <div class="form-group">
                                <label class="col-md-2 control-label">Last Name <span class="required">* </span></label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="sfullName" placeholder="Last Name"
                                           value="">
                                </div>
                                    </div>
                                    <div class="clearfix">
                                    <div class="form-group">
                                <label class="col-md-2 control-label">First Name <span class="required">* </span></label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="sfullName" placeholder="First Name"
                                           value="">
                                </div>
                                    </div>
                                    <div class="clearfix">
                                    <div class="form-group">
                                <label class="col-md-2 control-label">Name Extension <span class="required">* </span></label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="sfullName" placeholder="Name Extension"
                                           value="">
                                </div>
                                    </div>
                                    
                                    <div class="clearfix">
                                    <div class="form-group">
                                    <label class="col-md-2 control-label">Middle Name <span class="required">* </span></label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="ffullName" placeholder="Middle Name"
                                           value="">
                                </div>
                                    </div>
                                <div class="clearfix">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Date of Birth <span class="required">* </span></label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="ffullName" placeholder="Date of Birth"
                                           value="">
                                </div>
                                    </div>
                                <div class="clearfix">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Place of Birth <span class="required">* </span></label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="ffullName" placeholder="Place of Birth"
                                           value="">
                                </div>
                                    </div>
                                <div class="clearfix">
<div class></div>

                                </div>
                                 <div class="form-actions text-center">
     <button type="submit" data-loading-text="Submitting..."
             class="demo-loading-btn btn green">
         <i class="fa fa-plus"></i> Submit
     </button>
 </div>
</div>
                                 </form>
                                 <!-- END FORM-->  
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
  
   </div>
</div>
</div>
</div>

   @stop
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->
   {!!  HTML::script("css/metro/js/jquery-1.js") !!}
   <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->  
  
   <!-- IMPORTANT! jquery.slimscroll.min.js depends on jquery-ui-1.10.1.custom.min.js --> 
  

   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   
   <!-- END PAGE LEVEL SCRIPTS -->
  