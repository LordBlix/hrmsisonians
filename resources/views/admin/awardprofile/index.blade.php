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

<table width="100%">
<tr>
<td class="background left top">&nbsp;</td>
<td colspan="8" class="background top"></td>
<td class="background top right"></td>
</tr>
<td class="background left"></td>
<td colspan="8" class="bottom"></td>
<td class="background right"></td>
<tr>
<td class="background left right"></td>
<td class=""></td>
<td colspan="7" class="right"><b>CS Form No. 33-A</b></td>
<td class="background right"></td>

</tr>
<td class="background left right"></td>
<td></td>
<td colspan="7" class="right" style="font-size:10px;"><b><i>Revised 2018</i></b></td>
<td class="background right"></td>
<tr>
<td class="background left">&nbsp;</td>
<td colspan="8" class="left right"></td>
<td class="background right"></td>
</tr>
<tr>
<td class="background left right"></td>
<td colspan="6"class=""></td>
<td colspan="2" class="right" style="font-size:11px;"><i>(Stamp Date of Receipt)</i></td>
<td class="background right"></td>
</tr>
<tr>
<td class="background left right">&nbsp;</td>
<td colspan="8" class="right"></td>
<td class=" background right"></td>
</tr>
<tr>
<td class="background left right"></td>
<td colspan="8" class="right center "><b>Republic of the Philippines</b></td>
<td class="background right"></td>
</tr>
<tr>
<td class="background left right"></td>
<td colspan="8" class="center right"><b><u>LOCAL GOVERNMENT UNIT OF SISON</u></b></td>
<td class="background right"></td>
</tr>
<tr>
<td class="background left"></td>
<td colspan="8" class="left right center"><b><u>SISON, SURIGAO DEL NORTE</u></b></td>
<td class="background right"></td>
</tr>
<tr>
<td class="background left">&nbsp;</td>
<td colspan="8" class="left right"></td>
<td colspan="" class="background right"></td>
</tr>
<tr>
<td class="background left">&nbsp;</td>
<td colspan="8" class="left right"></td>
<td colspan="" class="background right"></td>
</tr>
<tr>
<td class="background left">&nbsp;</td>
<td colspan="8" class="left right"></td>
<td colspan="" class="background right"></td>
</tr>
<tr>
<td class="background left right"></td>
<td colspan="" class=""></td>
<td colspan="7" class="right"><b>Mr./Mrs/Ms:_____________________________________________________________________________________________</b></td>
<td class="background right"></td>
</tr>
<tr>
<td class="background left right"></td>
<td colspan="2" class=""></td>
<td colspan="6" class="right"><b>You are hereby appointed as ________________________________________________________________________ (SG/JG/PG) ______,</b></td>
<td class="background right"></td>
</tr>
<tr>
<td class="background left right"></td>
<td colspan="4"></td>
<td class="right" style="font-size:12px;" colspan="4"><b>(permanent. Temporary, etc.)</b></td>
<td class="background right"></td>
</tr>
<tr>
<td class="background left right"></td>
<td></td>
<td colspan="7" class="right"><b>with a compensation rate of ________________________________________________________________ (P _________________________________________)</b></td>
<td class="background right"></td>
</tr>
<tr>
<td class="background left right"></td>
<td></td>
<td colspan="7" class="right"><b>pesos per month.</b></td>
<td class="background right"></td>
</tr>
<tr>
<td class="background left">&nbsp;</td>
<td colspan="8" class="left right"></td>
<td class="background right"></td>
</tr>
<tr>
<td class="left background right"></td>
<td colspan="2"></td>
<td class="right" colspan="6"><b>The nature of appointment is __________________________________________________________________________ vice ________________</b></td>
<td class="background right"></td>
</tr>
<tr>
<td class="left background right"></td>
<td colspan="4"></td>
<td class="right" colspan="4" style="font-size:12px;" ><b>(Original, Promotion, etc.)</b></td>
<td class="background right"></td>
</tr>
<tr>
<td class="left background right"></td>
<td></td>
<td colspan="7" class="right"><b>____________________________________________________________,who ______________________________________ with Plantilla Item No. ________________</b></td>
<td class="right background"></td>
</tr>
<tr>
<td  class="left background right"></td>
<td colspan="2"></td>
<td colspan="6" style="font-size:12px;" colspan="" class="right"><b>(Transferred, Retired, etc.)</b></td>
<td coldpan="" class="background right"></td>
</tr>
<tr>
<td class="left background right"></td>
<td></td>
<td colspan="7" class="right"><b>Page ________________.</b></td>
<td class="background right"></td>
</tr>
<tr>
<td class="left background">&nbsp;</td>
<td colspan="8" class="left right"></td>
<td class="background right"></td>
</td>
</tr>
<tr>
<td class="left background right"></td>
<td colspan="2"></td>
<td colspan="6" class="right"><b>This appointment shall take effect on the date of signing by the appointing officer/authority.</b></td>
<td class="background right"></td>
</tr>
<tr>
<td class="left background">&nbsp;</td>
<td colspan="8" class="left right"></td>
<td class="background right"></td>
</tr>
<tr>
<td class="left background right"></td>
<td colspan="5"></td>
<td colspan="3" class="right"><b>Very truly yours,</b></td>
<td class="background right"></td>
</tr>
<tr>
<td class="left background">&nbsp;</td>
<td colspan="8" class="right left"></td>
<td class="background right"></td>
</tr>
<tr>
<td class="background left">&nbsp;</td>
<td class="left right" colspan="8"></td>
<td class="background right"></td>
</tr>
<tr>
<td class="background left">&nbsp;</td>
<td colspan="5" class="left"></td>
<td colspan="3" class="right">________________________________</td>
<td class="background right"></td>
</tr>
<tr>
<td class="left background right"></td>
<td colspan="5"></td>
<td colspan="3" class="right"><b>Appointing Officer/Authority</b></td>
<td class="background right"></td>
</tr>
<tr>
<td class="background left">&nbsp;</td>
<td colspan="8" class="left right"></td>
<td class="background right"></td>
</tr>
<tr>
<td class="left background"></td>
<td colspan="5" class="left"></td>
<td colspan="2" class="center">______________________</td>
<td colspan="" class="right"></td>
<td class="background right"></td>
</tr>
<tr>
<td class="left background">&nbsp;</td>
<td colspan="8" class="left right"></td>
<td class="background right"></td>
</tr>
<tr>
<td class="left background right">&nbsp;</td>
<td colspan="5"></td>
<td colspan="3" class="right center"><b>Date of Signing</b></td>
<td colspan="" class="background right"></td>
</tr>
<tr>
<td class="left background">&nbsp;</td>
<td colspan="8" class="bottom left right"></td>
<td class=" background right"></td>
</tr>
<tr>
<td colspan="10" class="left background bottom right">&nbsp;</td>
</tr>
<tr>
<td width="1%">&nbsp;</td>
<td width="2%">&nbsp;</td>
<td width="4%">&nbsp;</td>
<td width="3%"></td>
<td width="24%"></td>
<td width="39%"></td>
<td width="10%"></td>
<td width ="14%"></td>
<td width="2%"></td>
<td width="1%">&nbsp;</td>
</tr>
</table>
<table width="100%">
<tr>
<td class="left background top">&nbsp;</td>
<td class=" bottom top  background" colspan="5"></td>
<td class="right background top "></td>
</tr>
<tr>
<td class="left background">&nbsp;</td>
<td class="left right" colspan="5"></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left background right"></td>
<td colspan="5" class="right center"><b>Certification</b></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="background left">&nbsp;</td>
<td colspan="5" class="left right"> </td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left backgroundright"></td>
<td colspan="2"></td>
<td colspan="3" class="right">This is to certify that all requirements and supporting papers pursuant to CSC MC No. ___________________________</td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left background right"></td>
<td></td>
<td class="right" colspan="4">have been complied with, reviewed and found to be in order.</td>
<td class="backgroundright"></td>
</tr> 
<tr>
<td class="background left right"></td>
<td colspan="2"></td>
<td class="right" colspan="3">The position was published at __________________________________________ from ____________________ to _______________________</td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left right background">&nbsp;</td>
<td></td>
<td colspan="4" class="right">20 ___________ and posted in ______________________________________________________ from ________________________ to___________________________,</td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left right background">&nbsp;</td>
<td></td>
<td colspan="4" class="right">20 ___________ and posted in ______________________________________________________ from _______________________ to____________________________,</td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="background left right">&nbsp;</td>
<td></td>
<td colspan="4" class="right">20_______________ in consonace eith RA No 7041. The assessment bt the Human Resource Merit Promotion</td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="background left right"></td>
<td></td>
<td colspan="4" class="right">and Selection Board (HRMPSB) started on _______________________, 20____________.</td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="background left">&nbsp;</td>
<td colspan="5" class="left right"></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left background">&nbsp;</td>
<td colspan="3" class="left"></td>
<td colspan="2" class="right center"> Highest Ranking HRMO</td>
<td class="background right"></td>

</tr>
<tr>
<td class="left background">&nbsp;</td>
<td colspan="5" class="left right"></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left background">&nbsp</td>
<td colspan="5" class="left right bottom"></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left background">&nbsp;</td>
<td colspan="5" class=" background bottom "></td>
<td class="background right"></td>
</tr>
<tr>
<td class="left background">&nbsp;</td>
<td class="left right" colspan="5"></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left backgroundright"></td>
<td colspan="5" class="left right center"><b>Certification</b></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left background">&nbsp;</td>
<td colspan="5" class="left right"></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left backgroundright"></td>
<td></td>
<td></td>
<td class="right" colspan="3" style="font=size:14px;">This is to certify that the appointee has been screened and found</td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left backgroundright">&nbsp;</td>
<td class=""></td>
<td style="font-size:14px;" class="right" colspan="4">qualified by the majority of the HRMPSB during the deliberation held on ________________________________.</td>
<td class="backgroundright" ></td>
</tr>
<tr>
<td class="left background">&nbsp;</td>
<td colspan="5" class="left right"></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left background">&nbsp;</td>
<td colspan="3" class="left"></td>
<td colspan="2" class="right">_____________________________________________</td>
<td class=" backgroundright"></td>
</tr>
<tr>
<td class="left background">&nbsp;</td>
<td colspan="3" class="left"></td>
<td colspan="2" class="right center">Chairperson, HRMPSB</td>
<td class=" backgroundright"></td>
</tr>
<tr>
<td class="left background">&nbsp;</td>
<td colspan="5" class="left bottom right"></td>
<td class="backgroundright">&nbsp;</td>
</tr>
<tr>
<td colspan="7" class="left background bottom right">&nbsp;</td>
</tr>
<tr>
<td width="1%" class="">&nbsp;</td>
<td width="2%" class="">&nbsp;</td>
<td width="10%">&nbsp;</td>
<td width="50&" class="">&nbsp;</td>
<td width="34%">&nbsp;</td>
<td width="2%" class="">&nbsp;</td>
<td width="1%" class="">&nbsp;</td>
</tr>
</table>

<table width="100%">
<tr>
<td class="left background top"></td>
<td class="background center bottom top" colspan="3" style="font-size:14px;" class="background top bottom"><b>CSC Notation</b></td>
<td class="backgroundright top"></td>
</tr>
<tr>
<td class="left background right"></td>
<td class=""></td>
<td style="font-size:18px;" class="">wefwfwfwefwfwefwfwfwfwfwfwfwf</td>
<td class="right"></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left background right"></td>
<td class=""></td>
<td style="font-size:18px;" class="">wefwfwfwefwfwefwfwfwfwfwfwfwf</td>
<td class="right"></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left background right"></td>
<td class=""></td>
<td style="font-size:18px;" class="">wefwfwfwefwfwefwfwfwfwfwfwfwf</td>
<td class="right"></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left background">&nbsp;</td>
<td class="background bottom top"></td>
<td class="top background bottom"></td>
<td class="top background bottom"></td>
<td class="background right"></td>
</tr>
<tr>
<td height="20%" class="left backgroundright">&nbsp;</td>
<td></td>
<td></td>
<td class="right"></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left backgroundright"></td>
<td></td>
<td  style="font-size:18px; padding-left:110px;">ANY ERASURE OR ALTERATION ON THE CS ACTION SHALL NULLIFY OR</td>
<td class="right"></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left background right"></td>
<td></td>
<td style="font-size:18px;">INVALIDATE THIS APPOINTMENT EXCEPT IF THE ALTERATION WAS AUTHORIZED BY</td>
<td class="right"></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td  class="left background right"></td>
<td  style="font-size:18px;" class="">&nbsp;</td>
<td style="font-size:18px;">THE COMMISSION</td>
<td class="right"></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left background right">&nbsp;</td>
<td class="bottom"></td>
<td></td>
<td class="right"></td>
<td class="background right"></td>
</tr>
<tr>
<td width="1%" class="bottom backgroundleft">&nbsp;</td>
<td width="4%" class="backgroundbottom">&nbsp;</td>
<td width="90%" class="backgroundbottom top">&nbsp;</td>
<td width="4%" class="top backgroundbottom">&nbsp;</td>
<td width="1%" class="backgroundbottomright">&nbsp;</td>
</tr>
</table>

<table width="100%">
<tr>
<td>&nbsp;</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td class="left background top">&nbsp;</td>
<td class="top background bottom "></td>
<td class="top background bottom"></td>
<td class="top backgroundright"></td>
</tr>
<tr>
<td class="left backgroundright">&nbsp;</td>
<td class="right"></td>
<td class="right center" ><b>Acknowledgement</b></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left backgroundright">&nbsp;</td>
<td colspan="" class="right">Original Copy - for the Appointee</td>
<td class="">&nbsp;</td>
<td class="left backgroundright"></td>
</tr>
<tr>
<td class="left backgroundright"></td>
<td class="right">Original Copy - for the Civil Service Commission</td>
<td width="" class="right"><i>Received original/photocopy of appointment on _______________</i></td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left backgroundright"></td>
<td class="right">Original Copy - for the Agency</td>
<td class="right center">_________________________________________________________</td>
<td class="backgroundright"></td>
</tr>
<tr>
<td class="left backgroundright">&nbsp;</td>
<td class="right"></td>
<td class="right center">Appointee</td>
<td class="backgroundright"></td>
</tr>
<tr>
<td width="1%" class="bottom backgroundleft">&nbsp;</td>
<td width="48%" class="backgroundbottom top"></td>
<td width="38%"class="backgroundbottom top">&nbsp;</td>
<td width="1%" class="backgroundbottomright">&nbsp;</td>
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

.background{
  background-color:#a6a6a6;
}
.right{

    border-right: 0.1mm solid black;
}
.top{

  border-top: 0.1mm solid black;
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