@extends('admin.adminlayouts.adminlayout')@section('head')

    <!-- BEGIN PAGE LEVEL STYLES -->
    {!! HTML::style('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}
    {!! HTML::style('assets/global/plugins/bootstrap-datepicker/css/datepicker3.css') !!}
    <!-- END PAGE LEVEL STYLES -->
    @stop


@section('mainarea')
    @php
        use Illuminate\Support\Facades\Input
    @endphp

 

    @if(count($department)==0)
        
    @else
      

        {{--INLCUDE ERROR MESSAGE BOX--}}
        @include('admin.common.error')
        {{--END ERROR MESSAGE BOX--}}
        <hr>
      
        {!! Form::open(array('route'=>"admin.vacant.store",'class'=>'form-horizontal','method'=>'POST','files' => true)) !!}
        <div class="row ">
            <div class="col-md-12 col-sm-12">
                <div class="portlet box purple-wisteria">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-calendar"></i>Job Opportunities List
                        </div>

                    </div>
                    <div class="portlet-body">

                        <div class="form-body">
                     
                            <div class="form-group">
                                <label class="col-md-3 control-label">Place of Assignment :<span class="required">* </span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="PlaceOfAssignment" placeholder="Employee Name"
                                           value="{{ Input::old('fullName') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Position Title :<span class="required">* </span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="PositionTitle" placeholder="Employee Name"
                                           value="{{ Input::old('fullName') }}">
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
    @endif
    <hr>

    </div>

@stop



@section('footerjs')


    <!-- BEGIN PAGE LEVEL PLUGINS -->
    {!! HTML::script('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}
    {!! HTML::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') !!}
    {!! HTML::script("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js") !!}
    {!! HTML::script('assets/admin/pages/scripts/components-pickers.js') !!}
    <!-- END PAGE LEVEL PLUGINS -->


@stop
