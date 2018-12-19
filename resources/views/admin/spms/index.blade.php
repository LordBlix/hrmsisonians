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
    <div class="container-fluid">
  <div class="row-fluid header">
  <p><b><i>CS Form No. 212</i></b></p>
  <p style="font-size:10px;"><b><i>Revised 2017</i></b></p>
    <h3 style="font-family:arial;"class="center maintitle"><b>PERSONAL DATA SHEET</b></h3>
    <p style="font-size:10px;"><b><i>WARNING: Any misinterpretation made in the Personal Data Sheet and the Work Experience Sheet shall cause the filing of administrative/criminal cas/s against the person concerned.</i></b></p>
    <p style="font-size:10px;"><b><i>READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS) BEFORE ACCOMPLISHING THE PDS FORM.</i></b></p>
    <p style="font-size:8px;">Print legibly. Tick appropriate boxes and use separate sheet if necessary. Indicate N/A if not applicable. <b>DO NOT ABBREVIATE.</b></p>
    <p class="pull-right">CS ID No. _______________</p>
   
  </div>
  <!--ROW1-->
  <div class="row-fluid body">
    <h5 class="title5"><i>I. PERSONAL INFORMATION</i></h5>
    <table class="table" width="100%">
      <tbody>
      <tr>
      <td width="30%" class="backgroundright">2. SURNAME</td>
      <td colspan="1" class="surname">{{$employees->surname}}</td>
      <td class="bottom"></td>
      <td class="bottom"></td>
      <td class="bottom"></td>
      <td class="bottom"></td>

      <tr>
      <td width="30%" class="backgroundright">FIRST NAME</td>
      <td width="20%" colspan="1" class="bottom">{{$employees->first_name}}</td>
      <td width="20%" class="bottom"></td>
      <td width="15%" class="backgroundleftrightbottom">NAME EXTENSION (JR, SR. N/A)</td>
      <td class="bottom">{{$employees->extension}}</td>
      <td class="bottom"></td>
    </tr>

        <tr>
        <td width="30%" class="backgroundright2px">MIDDLE NAME</td>
        <td width="20%" class="bottom2px">{{$employees->middle_name}}</td>
        <td width="15%" class="bottom2px"></td>
        <td class="bottom2px"></td>
        <td class="bottom2px"></td>
        <td class="bottom2px"></td>

        </tr>
        <tr>
        <td width="30%" class="backgroundbottomright">3. DATE OF BIRTH<br>(mm/dd/yyyy)</td>
        <td width="10%" class="bottomright2px">{{$employees->date_of_birth}}</td>
        <td width="15%" class="backgroundleft2pxright">16. CITIZENSHIP</td>
        <td colspan="2" class=""><input type="checkbox" value="" name="a36"/>Filipino <?php echo str_repeat("&nbsp;",5) ?> <input type="checkbox" value="" name="a36"/>Dual Citizenship
        <br><?php echo str_repeat("&nbsp;",35) ?><input type="checkbox" value="" name="a36"/>by birth <?php echo str_repeat("&nbsp;",5) ?> <input type="checkbox" value="" name="a36"/>by naturalization
        
        </tr>
        <tr>
        <td class="backgroundbottomright">4. PLACE OF BIRTH</td>
      <td class="bottomright2px">{{$employees->place_of_birth}}</td>
       <td class="backgroundholder" >if holder of dual citizenship,</td>
      <td>Please indicate country</td>
        </tr>
        <tr>
        <td class="backgroundbottomright">5. SEX</td>
        <td class="bottomright2px"> <input type="checkbox" name="vehicle" value="Bike" >Male<?php echo str_repeat("&nbsp;",12)?><input type="checkbox" name="vehicle" value="Car" {{$emps}}> Female</td>
        <td class="backgroundbottomright" style="vertical-align:center">please indicate the details</td>
        <td class="bottom"> <select style="width: 300px;">
  <option value="volvo">Philippines</option>
  <option value="saab">Japan</option>
  <option value="mercedes">Australia</option>
  <option value="audi">Saudi Arabia</option>
</select> </td>
<td class="bottom"></td>
<td class="bottom"></td>
</tr>
<tr>
        <td class="backgroundright">6. CIVIL STATUS</td>
        <td class="right2x"><input type="checkbox" value="" name="a36"/> Single&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" value="" name="a36"/> Married<br>
        <input type="checkbox" value="" name="a36"/> Widowed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" value="" name="a36"/> Separated</td>
        <td style="vertical-align:top;"class="backgroundleft2pxright">17. RESIDENTIAL ADDRESS</td>
        <td class="bottom" style="vertical-align:bottom;"><i>House/Block/Lot No.</i></td>
        <td class="bottom" style="vertical-align:bottom" width="30%"><i>Street</i></td>
        <td class="bottom"></td>
              <tr>
        <td class="backgroundbottomright">&nbsp;</td>
        <td class="bottomright2px"><input type="checkbox" value="" name="a36"/>Other/s:</td>
        <td class="backgroundright"></td>
        <td class="bottom" style="vertical-align:bottom;"><i>Subdivision/Village</i></td>
        <td class="bottom" style="vertical-align:bottom" width="30%"><i>Barangay</i></td>
        <td class="bottom"></td>
        </tr>
        <tr>
        <td class="backgroundbottomright">7. HEIGHT (m)</td>
        <td class="bottomright2px"></td>
        <td class="backgroundleft2pxright"></td>
        <td class="bottom" style="vertical-align:bottom" style="vertical-align:bottom;"><i>City/Municipality</i></td>
        <td class="bottom" style="vertical-align:bottom" width="30%"><i>Province</i></td>
        <td class="bottom"></td>
        </tr>
     <tr>
     <td class="backgroundbottomright">8.WEIGHT  (kg.)</td>
     <td class="bottomright2px"></td>
     <td class="backgroundbottomright">ZIP CODE</td>
     <td class="bottom"></td>
     <td class="bottom"></td>
     <td class="bottom"></td>
     </tr>
     <tr>
     <td class="backgroundbottomright">9. BLOOD TYPE</td>
     <td class="bottomright2px"></td>
     <td class="backgroundright">18. PERMANENT ADDRESS</td>
     <td class="bottom" style="vertical-align:bottom" style="vertical-align:bottom;"><i>HouseBlock/Lot No.</i></td>
        <td class="bottom" style="vertical-align:bottom" width="30%"><i>Street</i></td>
        <td class="bottom"></td>
     </tr>
     <tr>
     <td class="backgroundbottomright">10. GSIS ID NO.</td>
     <td class="bottomright2px"></td>
     <td class="backgroundright"></td>
     <td class="bottom" style="vertical-align:bottom" style="vertical-align:bottom;"><i>Subdivion/Village</i></td>
        <td class="bottom" style="vertical-align:bottom" width="30%"><i>Barangay</i></td>
    <td class="bottom"></td>
    
     </tr>
     <tr>
     <td class="backgroundbottomright">11. PAG-IBIG ID NO.</td>
     <td class="bottomright2px"></td>
     <td class="backgroundright"></td>
     <td class="bottom" style="vertical-align:bottom" width="30%"><i>City/Municipality</i></td>
      <td class="bottom" style="vertical-align:bottom" width="30%"><i>Province</i></td>
      <td class="bottom"></td>
     </tr>
     <tr>
     <td class="backgroundbottomright">12. PHILHEALTH NO.</td>
     <td class="bottomright2px"></td>
     <td class="backgroundbottomright">ZIP CODE</td>
     <td class="bottom"></td>
     <td class="bottom"></td>
     <td class="bottom"></td>
     </tr>
     <tr>
     <td class="backgroundbottomright">13. SSS NO.</td>
     <td class="bottomright2px"></td>
     <td class="backgroundbottomright">19. TELEPHONE</td>
     <td class="bottom">N/A</td>
     <td class="bottom"></td>
     <td class="bottom"></td>
     </tr>
     <tr>
     <td class="backgroundbottomright">14. TIN NO.</td>
     <td class="bottomright2px"></td>
     <td class="backgroundbottomright">20. MOBILE</td>
     <td class="bottom">{{$employees->mobileNumber}}</td>
     <td class="bottom"></td>
     <td class="bottom"></td>
     </tr>
     <tr>
     <td class="backgroundbottomright">AGENCY EMPLOYEE NO.</td>
     <td class="bottomright2px"></td>
     <td class="backgroundbottomright">E-MAIL ADDRESS  (if any)</td>
     <td class="bottom">N/A</td>
     <td claass="bottom"></td>
     </tr>
      </tbody>
    </table>
  </div>
  <!--ROW2-->
  <div class="row-fluid body">
    <h5 class="title5"><b><i>II. FAMILY BACKGROUND</i></b></h5>
    <table class="table" width="100%">
      <tbody>
        <tr>
          <td width="30%" class="tbl">22. SPOUSE'S SURNAME</td>
          <td></td>
          <td style="padding-right:60px;" class="list">NAME OF CHILD</td>
          <td class="list">DATE OF BIRTH</td>
        </tr>
        <tr>
          <td width="30%" class="tbl">FIRST NAME</td>
          <td width="20%">rrrr</td>
          <td width="20%">rrrr</td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">MIDDLE SURNAME</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">OCCUPATION</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">EMPLOYER NAME</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">BUSINESS ADDRESS</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">TELEPHONE NO.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">FATHER'S SURNAME</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">FIRST NAME</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">MIDDLE NAME</td>
          <td></td>
          <td colspan="2"></td>
         
        </tr>
        <tr>
          <td class="tbl">25. MOTHER'S MAIDEN NAME</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">FIRST NAME</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">MIDDLE NAME</td>
          <td></td>
          <td style="color:red;" class="tbl center continue" colspan="2"><b><i>(Continue on separate sheet if necessary)</i></b></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW3-->
  <div class="row-fluid body">
    <h5 class="title5"><b><i>III. EDUCATIONAL BACKGROUND</i></b></h5>
    <table class="table" width="100">
      <tbody>
        <tr>
          <td class="tbl" rowspan="2">26.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LEVEL</td>
          <td class="tbl center" rowspan="2">NAME OF SCHOOL<br>(write in full)</td>
          <td class="tbl center" rowspan="2">BASIC EDUCATION/DEGREE/COURSE<br>(write in full)</td>
          <td width="10" style="font-size:10px;" class="tbl center" colspan="2">PERIOD OF ATTENDANCE</td>
          <td style="font-size:10px;" class="tbl center" rowspan="2">HIGHEST LEVEL<br>UNITS EARNED<br>(if not graduated)</td>
          <td width="50" class="tbl center" rowspan="2">YEAR<br>GRADUATED</td>
          <td class="tbl center" rowspan="2">SCHOLARSHIP/<br>ACADEMIC<BR>HONORS<BR>RECEIVED</td>
        </TR>
        <tr>
          <td width="10" class="tbl center">FROM</td>
          <td width="10"  class="tbl center">TO</td>
        </tr>
        <tr>
          <td width="20%" class="tbl" >ELEMENTARY</td>
          <td width="25%"></td>
          <td width="25%"></td>
          <td width="5%"></td>
          <td width="5%"></td>
          <td width="10%"></td>
          <td width="5%"></td>
          <td width="8%"></td>
         
        </tr>
        <tr>
          <td class="tbl">SECONDARY</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">VOCATIONAL/<br>
          TRADE COURSE</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">COLLEGE</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">GRADUATE STUDIES</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
        <td style="color:red;" class="tbl center continue" colspan="8"><b><i>(Continue on separate sheet if necessary)</i></b></td>
        </tr>
        <tr>
        <td class="tbl center continue" colspan="1"><b><i><b>SIGNATURE</b></td>
        <td style="" class="" colspan="2"></td>
        <td class="tbl center continue" colspan="2"><b><i><b>DATE</b></td>
        <td colspan="3"></td>
        
        </tr>
        <tr>
        <td style="" class="" colspan="2"></td>
        </tr>
        
      </tbody>
    </table>
  </div>
  <!--ROW4-->
  <div class="row-fluid body">
    <h5 class="title5"><i>CIVIL SERVICE ELIGIBILITY</i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="list center" rowspan="2">CAREER SERVICE</td>
          <td class="tbl center" rowspan="2">RATING</td>
          <td class="tbl center" rowspan="2">DATE OF EXAMINATION</td>
          <td class="list center" rowspan="2">PLACE OF EXAMINATION</td>
          <td class="tbl center" colspan="2">LICENSE</td>
        </tr>
        <tr>
          <td class="tbl center">NUMBER</td>
          <td class="tbl center">DATE OF RELEASE</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW5-->
  <div class="row-fluid body">
    <h5 class="title5"><i>WORK EXPERIENCE</i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="tbl center" colspan="2">INCLUSIVE DATES</td>
          <td class="list center" rowspan="2">POSITION TITLE</td>
          <td class="tbl center" rowspan="2">COMPANY</td>
          <td class="tbl center" rowspan="2">MONTHLY SALARY</td>
          <td class="tbl center" rowspan="2">SAL.GRADE & STEPS INCREMENT</td>
          <td class="tbl center" rowspan="2">STATUS OF APPOINTMENT</td>
          <td class="tbl center" rowspan="2">GOVERNMENT SERVICE</td>
        </tr>
        <tr>
          <td class="tbl center">FROM</td>
          <td class="tbl center">TO</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW6-->
  <div class="row-fluid body">
    <h5 class="title5"><i>VOLUNTARY WORK</i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="list center" rowspan="2">NAME & ADDRESS OF ORGANIZATION</td>
          <td class="tbl center" colspan="2">INCLUSIVE DATES</td>
          <td class="tbl center" rowspan="2">NUMBER OF HOURS</td>
          <td class="tbl center" rowspan="2">NATURE OF WORK</td>
        </tr>
        <tr>
          <td class="tbl center">FROM</tD>
          <td class="tbl center">TO</tD>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW7-->
  <div class="row-fluid body">
    <h5 class="title5"><i>TRAINING PROGRAMS</i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="list center" rowspan="2">TITLE OF SEMINAR</td>
          <td class="tbl center" colspan="2">INCLUSIVE DATES</td>
          <td class="tbl center" rowspan="2">NUMBER OF HOURS</td>
          <td class="tbl center" rowspan="2">CONDUCTED BY</td>
        </tr>
        <tr>
          <td class="tbl center">FROM</tD>
          <td class="tbl center">TO</tD>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW8-->
  <div class="row-fluid body">
    <h5 class="title5"><i>OTHER INFORMATION</i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="center tbl">SPECIAL SKILLS/HOBBIES</td>
          <td class="center tbl">NON-ACADEMIC RECOGNITION</td>
          <td class="center tbl">MEMBERSHIP IN ASSOCIATION OR ORGANIZATION</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW9-->
  <div class="row-fluid body">
    <h5 class="title5"><i></i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="question">
            <p>36. Are you related by consanguinity or affinity to any of the following: </p><br>
            <p>a. Within the third degree (for National Government Employees):
              appointing authority, recommending authority, chief of office/bureau/department
              or person who has immediate supervision over you in the Office, Bureau or Department
              where you will be appointed?</p><br>
            <p>b. Within fourth degree (for Local Government Employees):
              appointing authority or recommending authority where you will be appointed? </p>
          </td>
          <td class="answer">
            <input type="radio" value="" name="a36"/> YES
            <input type="radio" value="" name="a36"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
            <br>
            <input type="radio" value="" name="b36"/> YES
            <input type="radio" value="" name="b36"/> NO
            <br><br>
            <p>If YES, give details: <br>
            ___________________________<br>
            ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question">
            <p>37.</p><br>
            <p>a. Have you ever been formally charged?</p><br><br><br>
            <p>b. Have you ever been guilty of any administrative offense? </p>
          </td>
          <td class="answer">
            <input type="radio" value="" name="a37"/> YES
            <input type="radio" value="" name="a37"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
            <br>
            <input type="radio" value="" name="b37"/> YES
            <input type="radio" value="" name="b37"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question">
            <p>38.</p><br>
            <p>a. Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?</p><br>
          </td>
          <td class="answer">
            <input type="radio" value="" name="a38"/> YES
            <input type="radio" value="" name="a38"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question">
            <p>39.</p><br>
            <p>a. Have you ever been separated from the service in any of the following modes:<br>
              resignation, retirement, dropped from the rolls, dismissal, termination, and of term, finished contract, AWOL, in the public or private sector?</p>  
              <br>
          </td>
          <td class="answer">
            <input type="radio" value="" name="a39"/> YES
            <input type="radio" value="" name="a39"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question">
            <p>40.</p><br>
            <p>a. Have you ever been a candidate in a national or local election (except Barangay Election)?</p><br>
          </td>
          <td class="answer">
            <input type="radio" value="" name="a40"/> YES
            <input type="radio" value="" name="a40"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question">
            <p>41. Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000   (RA 8972), please answer the following items?</p><br>
            <p>a. Are you a member of any Indegenous group?</p><br>
            <p>b. Are you a differently-abled?</p><br>
            <p>c. Are you a solo parent?</p><br>
          </td>
          <td class="answer">
            <input type="radio" value="" name="a41"/> YES
            <input type="radio" value="" name="a41"/> NO
            <br>
            <p>If YES, give details: <br>
              ___________________________</p>
            <br>
            <input type="radio" value="" name="b41"/> YES
            <input type="radio" value="" name="b41"/> NO
            <br>
            <p>If YES, give details: <br>
              ___________________________</p> <br>
            <input type="radio" value="" name="c41"/> YES
            <input type="radio" value="" name="c41"/> NO
            <br>
            <p>If YES, give details: <br>
              ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question" colspan="2">
            <p>42. REFERENCES (Person not related by consanguinity of affinity to applicant/appointee)</p>
          </td>
        </tR>
      </tbody>
    </table>
  </div>
  <!--ROW10-->
  <div class="row-fluid body">
    <h5 class="title2"><i></i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="list center">Name</td>
          <td class="list center">Address</tD>
          <td class="tbl center">Tel. No.</td>
          <td rowspan="5" class="tbl center passportPic">
            <p>ID picture taken within the last 6 months (3.5cm x 4.5cm)</p>
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="question" colspan="3">
            <p>43. I declare under oath that the Personal Data Sheet has been accomplished by me, and is a true, correct and complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the Philippines<br><br>
              I also authorize the agency head / authorize representative to verify / validate the contents stated herein. I trust that this information shall remain confidential</p>
          </td>
        </tR>
      </tbody>
    </table>
  </div>
  <!--ROW11-->
  <div class="row-fluid body">
    <h5 class="title2"><i></i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td><!--COMMUNITY TAX CERTIFICATE NO HERE--></td>
          <td rowspan="3"><!--Signature--></td>
          <td rowspan="6" class="tbl center">RIGHT THUMBMARK</td>
        </tr>
        <tr>
          <td class="auth list center">COMMUNITY TAX CERTIFICATE NO.</td>
        </tr>
        <tr>
          <td><!--ISSUED AT--></td>
        </tr>
        <tr>
          <td class="auth list center">ISSUED AT</td>
          <td class="auth list center">SIGNATURE</td>
        </tr>
        <tr>
          <td><!--ISSUED ON--></td>
          <td><!--DATE ACCOMPLISHED--></td>
        </tr>
        <tr>
          <td class="auth list center">ISSUED ON</td>
          <td class="auth list center">DATE ACCOMPLISHED</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

    <style>
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
.table{
  position:relative;
  top:-20px;
  margin-bottom:-20px;
}
table,th,td1
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
table,th,td1
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