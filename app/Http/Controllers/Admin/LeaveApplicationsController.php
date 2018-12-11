<?php
namespace App\Http\Controllers\Admin;

use App\Events\LeaveRequestEvent;
use App\Http\Controllers\AdminBaseController;
use App\Models\Attendance;
use App\Models\Employee;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\Facades\DataTables;

class LeaveApplicationsController extends AdminBaseController
{

	public function __construct()
    {
        parent::__construct();
        $this->data['leaveApplicationOpen']    =   'active open';
        $this->data['pageTitle']               =   'Leave Applications';
    }


	public function index()
	{
		$this->data['leave_applications']   = Attendance::all();
		return View::make('admin.leave_applications.index', $this->data);
	}


//  Datatable ajax request
    public function ajaxApplications()
    {
	    $result =  Attendance::
		    select('attendance.id','employees.fullName','attendance.date','attendance.leaveType','attendance.reason','attendance.applied_on','attendance.application_status','attendance.halfDayType')
	        ->join('employees', 'employees.employeeID', '=', 'attendance.employeeID')
		    ->whereNotNull('attendance.application_status')
		    ->orderBy('attendance.applied_on','desc');

        return DataTables::of($result)

            ->editColumn('date',function($row){
                return date('d-M-Y',strtotime($row->date));
            })
            ->editColumn('applied_on',function($row){
                return date('d-M-Y',strtotime($row->applied_on));
            })
	        ->editColumn('leaveType',function($row){
		        $leave = ($row->leaveType=='half day')?$row->leaveType.'-'.$row->halfDayType:$row->leaveType;
		        return $leave;
	        })
            ->editColumn('reason',function($row){
	            return   strip_tags(\Illuminate\Support\Str::limit($row->reason,50));

            })
            ->editColumn('application_status',function($row)
            {
                $color = [
                    'pending'   =>  'warning',
                    'approved'  =>  'success',
                    'rejected'  =>  'danger'
                ];

                    return "<span class='label label-{$color[$row->application_status]}'>{$row->application_status}</span>";
            })
	        ->removeColumn('halfDayType')
            ->addColumn('edit', function($row) {
                return '<p><button  class="btn purple" data-toggle="modal" href="#static" onclick="show_application('.$row->id.');return false;" ><i class="fa fa-edit"></i> View/Edit</button></p>
                          <p><a style="width: 106px;" href="javascript:;" onclick="del(\'{{ $id }}\');return false;" class="btn red">
                        <i class="fa fa-trash"></i> Delete</a></p>';
            })
            ->escapeColumns(['edit', 'application_status'])
            ->make(false);
    }




    public function show($id)
    {
        $this->data['leave_application']    =   Attendance::find($id);
        return View::make('admin.leave_applications.show',$this->data);
    }


	public function update($id)
	{

        $this->data['data']              =   Input::all();
		$this->data['updated_by']        =  Auth::guard('admin')->user()->email;
		$leave_application = Attendance::findOrFail($id);

        $leave_application->update($this->data['data']);
        //Send Email to All active users
        $attendance   =   Attendance::find($id);

        $this->data['attendance']   = $attendance;
        $employee   =   Employee::where('employeeID','=',$attendance->employeeID)->first();
        $this->data['email']   =   $employee->email;

        if($this->data['setting']->leave_notification==1)
        {
            if ($this->data['data']['application_status'] != 'pending') {
                // TODO: Mail Implementation
                $attendanceDate =  date('d-M-Y', strtotime($this->data['attendance']->date));
                event(new LeaveRequestEvent($employee, $attendanceDate, $this->data['data']['application_status']));
            }
        }


        Session::flash('success',"<strong>Success! </strong> Updated successfully");

		return Redirect::route('admin.leave_applications.index');
	}



	public function destroy($id)
	{
        Attendance::destroy($id);

		$output['success']  =   'deleted';
		return Response::json($output, 200);
	}

}
