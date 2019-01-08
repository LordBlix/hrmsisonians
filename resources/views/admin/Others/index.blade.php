@extends('admin.adminlayouts.adminlayout')
@section('head')

{!! HTML::style('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}
    {!! HTML::style('assets/global/plugins/bootstrap-datepicker/css/datepicker3.css') !!}
    

{!! HTML::style("css/spms.css")!!}







@stop


@section('mainarea')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
 <thead>
     <tr>
         <td colspan="9" class="center">Republix of the Philippines</td>
     </tr>
<tr>
    <td colspan="9" class="center">CARAGA Region XIII</td>
</tr>
     <tr>
    <td colspan="9" class="center">Province of Surigao Del Norte </td>

     </tr>
     <tr>
         <td colspan="9" class="center">Municipality of Sison</td>
     </tr>
     <tr>
         <td colspan="9">&nbsp;</td>
     </tr>
     <td colspan="9" class="center"><b><u>SERVICE RECORDS</u></b></td>
     <tr>
         <td colspan="9" class="center">(To be accomplished by Employer)</td>
     </tr>
     <tr>
         <td colspan="9">&nbsp;</td>
     </tr>
     <tr>
         <td>NAME:</td>
         <td class="bottom">{{$surname}}</td>
         <td colspan="2" class="bottom center">{{ $na}}</td>
         <td colspan="2" class="bottom"></td>
         <td colspan="3" class="">(if married woman, give also full maiden name)</td>
     </tr>
     <tr>
         <td colspan=""></td>
         <td>(SURNAME)</td>
         <td colspan="2" class="center">(GIVEN NAME)</td>
         <td>(MIDDLE)</td>

     </tr>
     <tr>
         <td colspan="9">&nbsp;</td>
     </tr>
    <tr><td colspan="9">BIRTH:<u>{{$birth}} {{$place}} </u>(Data herein should be checked from birth or</td></tr>
     <tr><td></td><td colspan="" class="center">(DATE)</td><td></td><td colspan="4" class="center">(PLACE)  baptismal certificate or some other official documents)</td></tr>
     <tr><td colspan="9">&nbsp;</td></tr>
     <tr><td colspan=""></td><td colspan="8">THIS IS TO CERTIFY that the employment named herein above actually rendered services in this office</td></tr>
     <tr><td colspan="9">or office indicated below each line of which is supported by appointment and other papers actually issued and</td></tr>
     <tr><td colspan="9">approved by the authorities concerned.</td></tr>
     <tr>
<td colspan="9">&nbsp;</td>
     </tr>
 <tr>
<td colspan="2" class="borr top">&nbsp;</td>
<td colspan="3" class="borr top">&nbsp;</td>
<td class="borr top">&nbsp;</td>
<td class="borr top">&nbsp;</td>
<td class="borr top">&nbsp;</td>
<td class="borr top">&nbsp;</td>
 </tr>
<td colspan="2" class="borr center">SERVICE</td>
<td colspan="3" class="borr center"><u>RECORD OF APPOINTMENT</u></td>
<td class="borr center">OFFICE/ENTITY/</td>
<td class="borr center">DIVISION</td>
<td class="borr center">Leave</td>
<td class="borr center">Sepa-</td>
        </tr>
        <tr>
<td colspan="2" class="borr center">(Inclusive Dates)</td>
<td colspan="3" class="borr center"></td>
<td class="borr center">STATION/PLACE</td>
<td class="borr center">BRANCH</td>
<td class="borr center">w/o</td>
<td class="borr center">rated</td>
        </tr>
        <tr>
<td class="bo"></td>
<td class="bo"></td>
<td class="bo">Position/</td>
<td class="bo"></td>
<td class="bo"></td>
<td class="borr center">OF</td>
<td class="borr"></td>
<td class="borr center">pay</td>
<td class="borr center">Date</td>

        </tr>
    <tr>
    <td width="10%" class="bor center">From</td>
    <td width="10%" class="bor center">To</td>
    <td class="bor">Designation</td>
    <td class="bor">Status</td>
    <td class="bor">Salary/Annum</td>
    <td class="bor center">ASSIGNMENT</td>
    <td class="bor">&nbsp;</td>
    <td class="bor">&nbsp;</td>
    <td class="bor">&nbsp;</td>

 <tr><td>{{$name}}</td></tr>
    </tr>
    <tr><td colspan="8">Issued in compliance with Executive Order No. 54 dated August 10, 1954 and in accordance with Circular No. 58</td></tr>
 <tr><td colspan="8">dated August 10, 1954 of the system.</td></tr>
 <tr><td style="font-size:30px;">&nbsp;</td></tr>
 <tr><td></td><td colspan="" class="bottom"></td></tr>
 </thead>
 <tbody>
     
 </tbody>
    </table>
</body>
</html>


@stop