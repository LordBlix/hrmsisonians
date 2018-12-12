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
  
    <table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Full Name</th>
    <th>Address</th>
    <th>City</th>
    <th>Zip Code</th>
    <th>Action</th>
  </thead>
  <tbody>
    @foreach($employees as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->full_name}}</td>
      <td>{{$user->street_address}}</td>
      <td>{{$user->city}}</td>
      <td>{{$user->zip_code}}</td>
      <td><a href="{{route('admin.rating_pdf', $user->id)}}">PDF</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop