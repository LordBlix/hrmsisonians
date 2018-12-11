<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Models\Award;
use App\Models\Employee;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class AwardsController
 * @package App\Http\Controllers\Admin
 */
class AwardsController extends AdminBaseController
{


    public function __construct()
    {
        parent::__construct();
        $this->data['awardsOpen'] ='active open';
        $this->data['pageTitle']  =  'Awards';
    }

    //    Display a listing of awards
    public function index()
	{
		$this->data['awards'] = Award::all();

        $this->data['awardsActive'] =   'active';

		return View::make('admin.awards.index', $this->data);
	}


    //Datatable ajax request
    public function ajax_awards()
    {


	    $result =
		    Award::select('awards.id','awards.employeeID','fullName','awardName','gift','forMonth','awards.forYear')
		      ->join('employees', 'awards.employeeID', '=', 'employees.employeeID')
			  ->orderBy('awards.created_at','desc');

        return DataTables::of($result)
            ->addColumn('For Month',function($row) {
                return ucfirst($row->forMonth).' '.$row->forYear;
            })
            ->addColumn('edit', '
                        <a  class="btn purple"  href="{{ route(\'admin.awards.edit\',$id)}}" ><i class="fa fa-edit"></i> View/Edit</a>
                            &nbsp;<a href="javascript:;" onclick="del(\'{{ $id }}\',\'{{ $fullName}}\',\'{{ $awardName }}\');return false;" class="btn red">
                        <i class="fa fa-trash"></i> Delete</a>')
			->escapeColumns(['edit'])
            ->removeColumn('forYear')
            ->make(false);
    }

	public function create()
	{
        $this->data['addAwardsActive'] = 'active';
        $this->data['employees'] = Employee::selectRaw('CONCAT(fullName, " (EmpID:", employeeID,")") as full_name, employeeID')
	                                        ->where('status','=','active')
	                                        ->pluck('full_name','employeeID');

		return View::make('admin.awards.create',$this->data);
	}

	/**
	 * Store a newly created award in storage.
	 */

	public function store()
	{

		$validator = Validator::make($input = Input::all(), Award::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

        if($this->data['setting']->award_notification==1)
        {
            $employee = Employee::select('email','fullName')->where('employeeID', '=', $input['employeeID'])->first();

            $this->data['awardName'] = $input['awardName'];
	        $this->data['employee_name'] = $employee->fullName;

            //        Send award Mail
            Mail::send('emails.admin.award', $this->data, function ($message) use ($employee) {
                $message->from($this->data['setting']->email, $this->data['setting']->name);
                $message->to($employee['email'], $employee['fullName'])
                    ->subject('Award - ' . $this->data['awardName']);
            });
        }
		Award::create($input);

		return Redirect::route('admin.awards.index')->with('success',"<strong>{$input['awardName']}</strong> is awarded");
	}



	/**
	 * Show the form for editing the specified award.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

        $this->data['award']    = Award::find($id);
        $this->data['addAwardsActive'] = 'active';
        $this->data['employees'] = Employee::pluck('fullName','employeeID');
		return View::make('admin.awards.edit', $this->data);
	}

	/**
	 * Update the specified award in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$award = Award::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Award::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$award->update($data);

		return Redirect::route('admin.awards.edit',$id)->with('success',"<strong>Success</strong> Updated Successfully");
	}

	/**
	 * Remove the specified award from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (Request::ajax()) {
			Award::destroy($id);
			$output['success'] = 'deleted';

			return Response::json($output, 200);
		}else{
			throw(new Exception('Wrong request'));
		}

	}

}
