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


<table>
<tr>
<td class="left backgroundright">rrrr</td>
</tr>
<tr>
<td width="5%" class="backgroundleft">ee</td>
<td width="45%" class="backgroundbottom top"></td>
<td width="25%" class="backgroundbottom top">dddddddddddd</td>
<td class="backgroundright top"></td>
</tr>

</table>
<style>

.top{

    height:1px;
    border-top:1px solid black;
}

.left{

    border-left:1px solid black;
}

.center{
  text-align:center !important;
}
.title8{
  height:18px;
  background-color:#000000;
  border:2px solid #000000;
  color:#ffffff;
  position:relative;
  top:-10px;
}
.title2{
  height:1px;
  background-color:#000000;
  border:2px solid #000000;
  color:#ffffff;
  position:relative;
  top:-10px;
}
.header, .body{
  border:2px solid #000000;
}
.tbl{
  
  
}

.list{
  width:300px;
  height:1px;
}
.table1{
  position:relative;
  top:-20px;
  margin-bottom:-20px;
}
table1,th,td1
{
  border:1px solid #000000;
  font-size:12px;
}
.continue{
  background-color:#e0e0e0;
}
.question{
  background-color:#e0e0e0;
  width:500px;
}
.answer{
  width:100px;
}
.passportPic{
  height:180px;
}
.auth{
  background-color:#e0e0e0;
}


  <style>
  .center{
  text-align:center !important;
}
.title5{
  height:18px;
  background-color:#868686;
  font: italic bold 15px Georgia, serif;
  
  border:2px solid #000000;
  color:#ffffff;
  position:relative;
  top:-10px;
}
.title2{
  height:1px;
  background-color:#000000;
  border:2px solid #000000;
  color:#ffffff;
  position:relative;
  top:-10px;
}
.header, .body{
  border:2px solid #000000;
}
.tbl{
  height:1px;
  background-color:#a6a6a6;
}
.list{
  height:1px;
  width:300px;
}

.surname{
  border-left: 0.1mm solid black; 
  border-bottom: 0.1mm solid black;
}

.bottom{
  height:1px;
  border-bottom: 0.1mm solid black;
}


.backgroundleft{
    border-left: 0.1mm solid black;
    background-color:#a6a6a6;
}

.backgroundright{
  height:1px;
  border-bottom: 0.1mm solid #a6a6a6;
  border-right: 0.1mm solid black;
   background-color:#a6a6a6;
}

.backgroundright2px{
  border-bottom: 1mm solid black;
  border-right: 0.1mm solid black;
   background-color:#a6a6a6;
}

.bottom2px{
  border-bottom: 1mm solid black;
}

.backgroundbottomright2px{
border-bottom: 0.1mm solid black;
border-right: 1mm solid black;
background-color:#a6a6a6;
}

.backgroundleft2pxright{
border-right: 0.1mm solid black;
border-left: 1mm solid black;
background-color:#a6a6a6;
border-bottom: 0.1mm solid #a6a6a6;
}

.backgroundbottomright{
border-bottom: 0.1mm solid black;
border-right: 0.1mm solid black;
background-color:#a6a6a6;
}

.backgroundbottom{

  border-bottom: 0.1mm solid black;
  background-color:#a6a6a6;
}

.backgroundtopbottom{
border-top: 0.1mm solid black;
border-bottom:0.1mm solid black;
}

.bottomright{
border-bottom: 0.1mm solid black;
border-right: 0.1mm solid black;
}


.bottomright2px{
border-bottom: 0.1mm solid black;
border-right: 1mm solid black;
}

.backgroundleftrightbottom{
border-left: 0.1mm solid black;
border-bottom: 0.1mm solid black;
border-right: 0.1mm solid black;
background-color:#a6a6a6;
}

.residentialaddress{
  vertical-align:bottom
}


.right2x{
  border-right: 1mm solid black; 
}

.backgroundholder{
border-bottom:0.1mm solid #a6a6a6;
border-right:0.1mm solid black;
background-color:#a6a6a6;
}

.table{
  position:relative;
  top:-20px;
  margin-bottom:-20px;
}
table1,th,td1
{
  border:1px solid #000000;
  font-size:12px;
}
.continue{
  background-color:#e0e0e0;
}
.question{
  background-color:#e0e0e0;
  width:500px;
}
.answer{
  width:100px;
}
.passportPic{
  height:180px;
}
.auth{
  background-color:#e0e0e0;
}
p.ex1 {
  height:1px;
  padding-left: 7%;
  background-color:#a6a6a6;
}
p.ex2 {
  height:14px;
  background-color:#a6a6a6;
}


  </style>
    @stop