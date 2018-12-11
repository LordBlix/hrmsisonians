<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Models\Bank_detail;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\Employee_document;
use App\Models\Employee_education;
use App\Models\Salary;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
/**
 * Class EmployeesController
 * This Controller is for the all the related function applied on employees
 */

class EmployeesController extends AdminBaseController {

	/**
	 * Constructor for the Employees
	 */

	public function __construct()
	{
		parent::__construct();
		$this->data['employeesOpen'] =   'active open';
		$this->data['pageTitle']     =   'Employees';
	}

	public function index()
	{
		$this->data['employees']       =    Employee::all();
		$this->data['employeesActive'] =   'active';

		return View::make('admin.employees.index', $this->data);
	}

	/**
	 * Show the form for creating a new employee
	 */
	public function create()
	{
		$this->data['employeesActive'] =   'active';
		$this->data['department']      =     Department::pluck('deptName','id');

		return View::make('admin.employees.create',$this->data);
	}

	/**
	 * Store a newly created employee in storage
	 */
	public function store(Request $input)
	{
			$this->validate($input,Employee::rules('create'));
	
	
		

			DB::connection()->enableQueryLog();
			DB::beginTransaction();
			try {
				Employee::create([
					'employeeID'    => $input['employeeID'],
					'fullName'      => ucwords(strtolower($input['fullName'])),
			
				]);
			}catch(\Exception $e)
			{
				DB::rollback();
				throw $e;
			}
	
			DB::commit();
			



			
            if ($input['educationType'] && is_array($input['educationType'])) {

                

			    foreach (Input::get('educationType') as $key => $value) {
			        Employee_education::create([
			            'employeeID'        => $input['employeeID'],
			            'type'              => $value,
			           // 'school'            => $input['schoolName'][$key],
			            //'start_date'        => Carbon::parse($input['educationStart'][$key]),
			            //'end_date'          => Carbon::parse($input['educationEnds'][$key]),
			            //'graduation_year'   => Carbon::parse($input['educationGraduationYear'][$key]),
			            //'honor_received'    => $input['eductionHonors'][$key]
                    ]);
                }
            }

			return Redirect::route('admin.employees.index')->with('success',"<strong>{$input['fullName']}</strong> successfully added to the Database");
		
		}


	/**
	 * Show the form for editing the specified employee
	 */
	public function edit($id)
	{
		$this->data['employeesActive']  =   'active';
		$this->data['department']       =   Department::pluck('deptName','id');
		$this->data['employee']         =   Employee::where('employeeID', '=' ,$id)->first();
		$this->data['designation']      =   Designation::find($this->data['employee']->designation);

		$doc = [];

		foreach($this->data['employee']->getDocuments as $documents)
		{
			$doc[$documents->type] =  $documents->fileName ;
		}
		$this->data['documents']  =   $doc;

		$this->data['bank_details']     =   Bank_detail::where('employeeID', '=' ,$id)->first();
		$this->data['educations']     =   Employee_education::where('employeeID', '=' ,$id)->get();

		return View::make('admin.employees.edit', $this->data);
	}



	/**
	 * Update the specified employee in storage.
	 */
	public function update($id)
	{ //return input::all();
		//----Bank Details Update-------
		if(Input::get('updateType')=='bank')
		{

			$validator = Validator::make($input = Input::all(), Employee::rules('bank'));

			if ($validator->fails())
			{
				$output['status']   =   'error';
				$output['msg']      =   $validator->getMessageBag()->toArray();

			}else{

				$bank_details = Bank_detail::firstOrNew(['employeeID' => $id]);

				$bank_details->accountName   = Input::get('accountName');
				$bank_details->accountNumber = Input::get('accountNumber');
				$bank_details->bank          = Input::get('bank');
				$bank_details->pan           = Input::get('pan');
				$bank_details->ifsc          = Input::get('ifsc');
				$bank_details->branch        = Input::get('branch');
				$bank_details->save();

				$output['status'] = 'success';
				$output['msg'] = 'Bank details updated successfully';
			}
		}

		//-------Bank Details Update End--------
		//-------Company Details Update Start--------

		else if(Input::get('updateType')=='company')
		{
			$company_details = Employee::where('employeeID','=', $id)->first();


			$validator = Validator::make($input = Input::all(), Employee::rules('update',$company_details->id));

			if ($validator->fails())
			{
				$output['status']   =   'error';
				$output['msg']      =   $validator->getMessageBag()->toArray();

			}else{

				$company_details->employeeID  = $id;
				$company_details->designation = Input::get('designation');
				$company_details->joiningDate = date('Y-m-d',strtotime(Input::get('joiningDate')));
				$company_details->exit_date   = (trim(Input::get('exit_date'))!='')?date('Y-m-d',strtotime(Input::get('exit_date'))):null;

				$company_details->status      = (Input::get('status')!='active')?'inactive':'active';
				$company_details->save();
				if(isset($input['salary']))
				{
					foreach ($input['salary'] as $index => $value)
					{
						$salary_details = Salary::find($index);
						$salary_details->type = $input['type'][$index];
						$salary_details->salary = $value;
						$salary_details->save();
					}
				}
				$output['status'] = 'success';
				$output['msg']    = 'Company Details updated successfully';
			}
		}

		//-------Company Details Update End--------------


		//-------Personal info Details Update Start----------

		else if(Input::get('updateType')=='personalInfo')
		{

			$employee   =   Employee::where('employeeID','=',$id)->get()->first();


			$validator = Validator::make($data = Input::all(),Employee::rules('personalInfo',$employee->id));

			if ($validator->fails())
			{
				return Redirect::back()->with(['errorPersonal' => $validator->messages()->all()])->withInput();
			}


			$input  =   Input::all();

			$name   = explode(' ', $input['fullName']);
			$firstName = ucfirst($name[0]);


			$password = ($data['password']!='')?Hash::make(Input::get('password')):$data['oldpassword'];

			// Profile Image Upload
			if (Input::hasFile('profileImage'))
			{
				$path       = public_path()."/profileImages/";
				File::makeDirectory($path, $mode = 0777, true, true);

				$image 	    = Input::file('profileImage');


				$extension  = $image->getClientOriginalExtension();
				$filename	= "{$firstName}_{$id}.".strtolower($extension);

				//Image::make($image->getRealPath())->resize(872,724)->save("$path$filename");

				Image::make($image->getRealPath())
				     ->fit(872, 724, function ($constraint) {
					     $constraint->upsize();
				     })->save($path . $filename);


			}else
			{
				$filename   =   Input::get('hiddenImage');
			}



			$employee->update(
				
				[
					'fullName'      => ucwords(strtolower($input['fullName'])),
					'place_of_birth'    => ucwords(strtolower($input['placeOfBirth'])),
					'sex'        => $input['sex'],
					'email'         => $input['email'],
					'password'      => $password,
					'date_of_birth' => (trim(Input::get('date_of_birth'))!='')?date('Y-m-d',strtotime(Input::get('date_of_birth'))):null,
					'civil_status'  => $input['civilStatus'],
					'Weight'  => $input['weight'],
					'Height' => $input['height'],
					'profileImage'     => $filename,
				]);

			return Redirect::route('admin.employees.edit',$id)->with('successPersonal',"<strong>Success</strong> Updated Successfully");

		}
		//-------Personal Details Update End-------------

		//-------Documents info Details Update Start--------
		else if(Input::get('updateType')=='documents')
		{

			// -------------- UPLOAD THE DOCUMENTS  -----------------
			$documents  =   ['resume','offerLetter','joiningLetter','contract','IDProof'];

			foreach ($documents as $document) {
				if (Input::hasFile($document)) {

					$path = public_path()."/employee_documents/{$document}/";
					File::makeDirectory($path, $mode = 0777, true, true);

					$file 	= Input::file($document);
					$extension  = $file->getClientOriginalExtension();

					$employee   =   Employee::where('employeeID','=',$id)->get()->first();
					$nameArray  =   explode(' ',$employee->fullName);
					$firstName  =   $nameArray[0];
					$filename	= "{$document}_{$id}_{$firstName}.$extension";

					Input::file($document)->move($path, $filename);
					$employee_document  =   Employee_document::firstOrNew(['employeeID'=>$id,'type'=>$document]);
					$employee_document->fileName  =   $filename;
					$employee_document->type      =   $document;
					$employee_document->save();

				}
			}

			return Redirect::route('admin.employees.edit',$id)->with('successDocuments',"<strong>Success</strong> Updated Successfully");
			//  ********** END UPLOAD THE DOCUMENTS**********

		}
		//-------Documents info Details Update END--------

		//-------Education info Details Update Start--------
		else if(Input::get('updateType')=='education')
		{
            $employee   =   Employee::where('employeeID','=',$id)->get()->first();

            $validator = Validator::make($input = Input::all(), Employee::rules('education'));
            if ($validator->fails())
            {
                return Response::json(['status' => 'error', 'msg' => $validator->getMessageBag()->toArray()], 200);
            }

            $employee->getEducationDetail()->delete();

            foreach (Input::get('educationType') as $key => $value) {
                Employee_education::create([
                    'employeeID'        => $id,
                    'type'              => $value,
                    'school'            => Input::get('schoolName')[$key],
                    'start_date'        => Carbon::parse(Input::get('educationStart')[$key]),
                    'end_date'          => Carbon::parse(Input::get('educationEnds')[$key]),
                    'graduation_year'   => Carbon::parse(Input::get('educationGraduationYear')[$key]),
                    'honor_received'    => Input::get('eductionHonors')[$key]
                ]);
            }

			$output = ['status' => 'success', 'msg' => 'Education details updated successfully.'];

		}
		//-------Education info Details Update END--------

		return Response::json($output, 200);
	}



	public function export(){
		$employee   =   Employee::join('designation', 'employees.designation', '=', 'designation.id')
		                        ->join('department', 'department.id', '=', 'designation.deptID')
		                        ->leftJoin('bank_details', 'bank_details.employeeID', '=', 'employees.employeeID')
		                        ->select('employees.id','employees.employeeID',
			                        'employees.fullName','department.deptName as Department',
			                        'designation.designation as Designation','employees.fatherName','employees.mobileNumber','employees.date_of_birth',
			                        'employees.joiningDate','employees.localAddress','employees.permanentAddress','employees.status',
			                        'employees.exit_date','employees.permanentAddress',
			                        'bank_details.accountName','bank_details.accountNumber','bank_details.bank','bank_details.pan','bank_details.branch',
			                        'bank_details.ifsc'
		                        )->orderBy('id','asc')
		                        ->get()->toArray();

		$data = $employee;

		Excel::create('employees'.time(), function($excel) use($data) {

			$excel->sheet('Employees', function($sheet) use($data) {

				$sheet->fromArray($data);

			});

		})->store('xls')->download('xls');


	}
	/**
	 * Remove the specified employee from storage.
	 */

	public function destroy($id)
	{
		Employee::where('employeeID', '=', $id)->delete();
		$output['success']  =   'deleted';
		return Response::json($output, 200);
	}





}
