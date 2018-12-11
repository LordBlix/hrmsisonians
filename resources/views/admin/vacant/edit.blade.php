@extends('admin.adminlayouts.adminlayout')

@section('head')
    <!-- BEGIN PAGE LEVEL STYLES -->
    {!!  HTML::style("assets/global/plugins/bootstrap-datepicker/css/datepicker3.css")  !!}
    {!!  HTML::style("assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css")  !!}
    <!-- BEGIN THEME STYLES -->
@stop


@section('mainarea')

			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			No. of Vacant Position page
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="{{route('admin.dashboard.index')}}">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="{{ route('admin.vacant.index') }}">Vacant</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="">Edit Item</a>
					</li>
				</ul>
			
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->

                {{--INLCUDE ERROR MESSAGE BOX--}}
                @include('admin.common.error')
                {{--END ERROR MESSAGE BOX--}}


					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Edit item
							</div>
							<div class="tools">
							</div>
						</div>

						<div class="portlet-body form">

						<!-- BEGIN FORM-->
						{!! Form::open(array('route'=>["admin.vacant.update",$vacant->ID],'class'=>'form-horizontal form-bordered','method'=>'PATCH','files'=>true)) !!}


                                    <div class="form-body">

                                        <div class="form-group">
                                        <label class="col-md-2 control-label">Place of Assignment : <span class="required"> * </span></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="placeOfAssignment" placeholder="Place of Assignment" value="{{ $vacant->name }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                             <label class="col-md-2 control-label">Position Title : </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="positionTitle" placeholder="Position" value="{{ $vacant->Position }}" >
                                            </div>
                                        </div>

                                         <div class="form-group">
                                             <label class="col-md-2 control-label">Plantilla Item No. : </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="plantillaItemNo" placeholder="Plantilla Item No" value="{{ $vacant->Plantilla }}" >
                                            </div>
                                        </div>

                                           <div class="form-group">
                                             <label class="col-md-2 control-label">Salary/Job/Pay Grade : </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="payGrade" placeholder="Salary Job/ Pay Grade" value="{{ $vacant->Pay }}" >
                                            </div>
                                        </div>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="">Monthly Salary :</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="monthlySalary" placeholder="Monthly Salary" value="{{ $vacant->Salary}}">
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label"  for="">Eligibility :</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="Eligibility" placeholder="Eligibility" value="{{ $vacant->Eligibility }}">
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label"  for="">Education :</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="Education" placeholder="Education" value="{{$vacant->Education}}">
                                            </div>
                                        </div>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="">Training :</label>    
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="Training" placeholder="Training" value="{{$vacant->Training}}">                                            
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="">Work Experience :</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="workExperience" placeholder="Work Experience" value="{{$vacant->Experience}}">
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="">Competency</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="competency" placeholder="competency" value="{{$vacant->Competency}}">
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="">Instruction</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="Instruction" placeholder="Instruction" value="{{$vacant->Instruction}}">
                                            </div>
                                        </div>

                                          <div class="form-group">
                                                    <label class="col-md-2 control-label">Posting Date:  </label>
                                                        <div class="col-md-6">
                                                            <div class="input-group input-medium date date-picker"  data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                                       <input type="text" class="form-control" name="postingDate" readonly value="{{date('d-m-Y',strtotime($vacant->PostDate))}}">
                                                                   <span class="input-group-btn">
                                                                   <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                                                   </span>
                                                                   </div>
                                                        </div>
                                           </div>
                                        
                                        <div class="form-group">
                                                    <label class="col-md-2 control-label" for="">Closing Date</label>
                                                        <div class="col-md-6">
                                                            <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-data-viewmode="years" >
                                                                    <input type="text" class="form-control" name="closingDate" readonly value="{{date('d-m-y',strtotime($vacant->CloseDate))}}">
                                                                    <span class="input-group-btn">
                                                                    <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                        </div>


                                     <div class="form-group">
                                                    <label class="col-md-2 control-label">Attach Documents:</label>
                                                    <input type="hidden" name="billhidden" value="{{$vacant->bill}}">
                                                    <div class="col-md-6">
                                                       <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                       <div class="input-group input-large">
                                                                           <div class="form-control uneditable-input" data-trigger="fileinput">
                                                                               <i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
                                                                               </span>
                                                                           </div>
                                                                           <span class="input-group-addon btn default btn-file">
                                                                           <span class="fileinput-new">
                                                                           Select file </span>
                                                                           <span class="fileinput-exists">
                                                                           Change </span>
                                                                           <input type="file" name="bill">
                                                                           </span>
                                                                           <a href="#" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
                                                                           Remove </a>
                                                                       </div>

                                                               </div>
                                                    </div>
                                                    <div class="col-md-4">

                                                    @if($vacant->bill!='')
                                                            <a href="https://docs.google.com/viewer?url={{URL::to('expense/bills/'.$vacant->bill)}}" target="_blank"  class="btn purple">View Bill</a>
                                                     @endif
                                                    </div>

                                        </div>



                        								<div class="form-actions">
                        									<div class="row">
                        										<div class="col-md-offset-3 col-md-9">
                        											<button type="submit" data-loading-text="Updating..." class="demo-loading-btn btn green"><i class="fa fa-edit"></i> Update</button>

                        										</div>
                        									</div>
                        								</div>
                        						{!!  Form::close()  !!}
                        							<!-- END FORM-->

						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					
				</div>
			</div>
			<!-- END PAGE CONTENT-->



@stop

@section('footerjs')

<!-- BEGIN PAGE LEVEL PLUGINS -->
{!!  HTML::script("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js")  !!}
{!!  HTML::script("assets/admin/pages/scripts/components-pickers.js")  !!}
{!!  HTML::script("assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js")  !!}
<!-- END PAGE LEVEL PLUGINS -->
<script>
jQuery(document).ready(function() {

           ComponentsPickers.init();


        });
</script>
@stop