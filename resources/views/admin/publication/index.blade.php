@extends('admin.adminlayouts.adminlayout')

@section('head')
	<!-- BEGIN PAGE LEVEL STYLES -->
	{!! HTML::style("assets/global/plugins/select2/select2.css") !!}
	{!! HTML::style("assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css") !!}
	<!-- END PAGE LEVEL STYLES -->

@stop


@section('mainarea')
@php
        use Illuminate\Support\Facades\Input
    @endphp
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			{{$pageTitle}} <small>{!! Lang::get('menu.employeeList2') !!}</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="{{route('admin.dashboard.index')}}">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="{{route('admin.publication.index')}}">{!! Lang::get('menu.employeeList3') !!}</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Publication List</a>
					</li>
				</ul>

			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->

			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div id="load">

						@if(Session::get('success'))
							<div class="alert alert-success">{!! Session::get('success') !!}</div>
						@endif

                    </div>
                   <a href="{{route('admin.publication.create')}}" class="btn green">
                    Add New Publication <i class="fa fa-plus"></i>
                    </a>

                         <hr>
					<div class="portlet box blue">

						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-users"></i>Publication List
							</div>
							<div class="tools" style="  padding: 5px;">
								<div class="btn-group pull-right">
                        						 <a  href="{{route('admin.employees.export') }}" class="btn yellow">
											     <i class="fa fa-file-excel-o"></i>    Export
												</a>
								</div>
							</div>
						</div>

						<div class="portlet-body">

							<table class="table table-striped table-bordered table-hover" id="sample_publication">
							<thead>
							<tr>
								<th class="text-center">
									 AgencyID
								</th>
								<th class="text-center">
                                     Image
                                </th>
								<th style="text-align: center">
									 Agency
								</th>
								<th class="text-center">
                                	 Region
                                </th>
								<th class="text-center">
                                	 Position Title
                                </th>
								<th class="text-center">
									 Plantilla Item No.
								</th>
                                <th class="text-center">
									 Posting Date
								</th>
                                <th class="text-center">
									 Closing Date
								</th>
								<th class="text-center">
									 Status
								</th>
								<th class="text-center">
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
					
							@foreach ($publications as $publication)
                                <tr id="row{{ $publication->employeeID }}">
                                    <td>
                                            {{ $publication->ID }}

                                    </td>
                                    <td class="text-center">
                                        {!! HTML::image("/profileImages/{$publication->profileImage}",'ProfileImage',['height'=>'80px']) !!}

                                    </td>
                                    <td>
                                          {{ $publication->name }}
                                    </td>
                                    <td>
                                         Caraga
                                    </td>
                                     <td class="text-center">
                                     {{ $publication->Position }}
                                          {{-- $publication->workDuration($publication->employeeID) --}}
                                    </td>
                                     <td>
                                          {{ $publication->Plantilla }}
                                    </td>
                                     <td>
                                         Posting Date
                                    </td>
                                    <td>
                                         Closing Date
                                    </td>
                                    <td>
                                    @if($publication->status=='active')
                                        <span class="label label-sm label-success"> {{ $publication->status }} </span>
                                    @else
                                        <span class="label label-sm label-danger"> {{ $publication->status }} </span>
                                     @endif
                                    </td>
                                    <td class="">
                                    <p> <a class="btn purple" href="{{ route('admin.vacant.edit',$publication->ID) }}"><i class="fa fa-edit"></i> View/Edit</a></p>
                                    <p>    <a class="btn red" style="width: 105px;" href="javascript:;" onclick="del('{{$publication->ID}}','{{ $publication->name }}')"><i class="fa fa-trash"></i> Delete</a></p>
                                    </td>
                                </tr>
							@endforeach
							
					
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					
				</div>
			</div>
			<!-- END PAGE CONTENT-->

			{{--DELETE MODAL CALLING--}}
                            @include('admin.common.delete')
             {{--DELETE MODAL CALLING END--}}

@stop


@section('footerjs')


<!-- BEGIN PAGE LEVEL PLUGINS -->
	{!!  HTML::script("assets/global/plugins/select2/select2.min.js") !!}
	{!!  HTML::script("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js") !!}
	{!!  HTML::script("assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js") !!}
    {!!  HTML::script("assets/admin/pages/scripts/table-managed.js") !!}
<!-- END PAGE LEVEL PLUGINS -->

	<script>
	jQuery(document).ready(function() {

	   TableManaged.init();
	});
	</script>
	<script>
	function del(id,name)
    		{
    			$('#deleteModal').appendTo("body").modal('show');
    			$('#info').html('Are you sure ! You want to delete <strong>'+name+'</strong> ??');
    			$("#delete").click(function()
    			{
    					var url = "{{ route('admin.employees.destroy',':id') }}";
						url = url.replace(':id',id);

    					 $.ajax({
    		                type: "DELETE",
    		                url : url,
    		                dataType: 'json',
    		                data: {"id":id}

    		            	}).done(function(response)
    		           		  {

    		               	 	 if(response.success == "deleted")
    		                 	 {
    		                 	 		$("html, body").animate({ scrollTop: 0 }, "slow");
    		                  	   		$('#deleteModal').modal('hide');
    		                 	  		$('#row'+id).closest('tr').remove();
    		                 	  		$('#load').html("<p class='alert alert-success text-center'><strong>"+name +"</strong> Successfully Deleted</p>");
    		                  	 }
    		           		 });
    				})

    			}


</script>
@stop
	