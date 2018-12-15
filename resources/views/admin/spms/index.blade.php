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
    <h3 class="center maintitle">PERSONAL DATA SHEET</h3>
    <p class="pull-right">CS ID No. _______________</p>
  </div>
  <!--ROW1-->
  <div class="row-fluid body">
    <h5 class="title5"><i>PERSONAL INFORMATION</i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="tbl">SURNAME</td>
          <td colspan="3"></td>
        </tr>
        <tr>
          <td class="tbl">FIRSTNAME</td>
          <td colspan="3"></td>
        </tr>
        <tr>
          <td class="tbl">MIDDLENAME</td>
          <td></td>
          <td class="tbl">NAME EXTENSION</td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">DATE OF BIRTH</td>
          <td></td>
          <td class="tbl" rowspan="2">RESIDENTIAL ADDRESS</td>
          <td rowspan="2"></td>
        </tr>
        <tr>
          <td class="tbl">PLACE OF BIRTH</td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">SEX</td>
          <td></td>
          <td class="tbl">ZIPCODE</td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">CIVIL STATUS</td>
          <td></td>
          <td class="tbl">TELEPHONE NO.</td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">CITIZENSHIP</td>
          <td></td>
          <td class="tbl" rowspan="2">PERMANENT ADDRESS</td>
          <td rowspan="2"></td>
        </tr>
        <tr>
          <td class="tbl">HEIGHT(m)</td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">WEIGHT(kg)</td>
          <td></td>
          <td class="tbl">ZIPCODE</td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">BLOOD TYPE</td>
          <td></td>
          <td class="tbl">TELEPHONE NO.</td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">GSIS NO.</td>
          <td></td>
          <td class="tbl">E-MAIL ADDRESS</td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">PAG-IBIG ID NO.</td>
          <td></td>
          <td class="tbl">CELLPHONE NO.</td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">PHILHEALTH NO.</td>
          <td></td>
          <td class="tbl">AGENCY EMPLOYEE NO.</td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">SSS NO.</td>
          <td></td>
          <td class="tbl">T.I.N.</td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW2-->
  <div class="row-fluid body">
    <h5 class="title5"><i>FAMILY BACKGROUND</i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="tbl">SPOUSE'S SURNAME</td>
          <td></td>
          <td class="list">NAME OF CHILD</td>
          <td class="list">DATE OF BIRTH</td>
        </tr>
        <tr>
          <td class="tbl">FIRST SURNAME</td>
          <td></td>
          <td></td>
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
          <td class="tbl">MOTHER'S MAIDEN SURNAME</td>
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
    <h5 class="title5"><i>EDUCATIONAL BACKGROUND</i></h5>
    <table class="table">
      <tbody>
        <tr>
          <td class="tbl center" rowspan="2">LEVEL</td>
          <td class="tbl center" rowspan="2">NAME OF SCHOOL<br>(write in full)</td>
          <td class="tbl center" rowspan="2">BASIC<br>EDUCATION/DEGREE/COURSE<br>(write in full)</td>
          <td width="50" class="tbl center" rowspan="2">YEAR GRADUATED</td>
          <td class="tbl center" rowspan="2">HIGHEST GRADE/LEVEL EARNED</td>
          <td class="tbl center" colspan="2">INCLUSIVE DATES OF ATTENDANCE</td>
          <td class="tbl center" rowspan="2">SCHOLARSHIP/HONORS RECEIVED</td>
        </TR>
        <tr>
          <td class="tbl center">FROM</td>
          <td class="tbl center">TO</td>
        </tr>
        <tr>
          <td class="tbl">ELEMENTARY</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
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
          <td class="tbl">VOCATIONAL</td>
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
        <td class="tbl" colspan="1"><b><i><b>SIGNATURE</b></td>
        <td style="" class="" colspan="2"></td>
        <td style="" class="" colspan="2"></td>
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
  width:150px;
  
}
.list{
  width:300px;
}
.table{
  position:relative;
  top:-20px;
  margin-bottom:-20px;
}
table,th,td
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
  width:150px;
  background-color:#a6a6a6;
}
.list{
  width:300px;
}
.table{
  position:relative;
  top:-20px;
  margin-bottom:-20px;
}
table,th,td
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


  </style>

  @stop