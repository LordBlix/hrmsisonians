<?php


namespace App\Http\Controllers\Admin;
use App\Models\vacant;
use App\Http\Controllers\AdminBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
class VacantController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function __construct()
	{
		parent::__construct();
		$this->data['employeesOpen'] =   'active open';
		$this->data['pageTitle']     =   'Vacant';
	}
   
   
   
     public function index()
    {
        //

        $this->data['vacants']       =    vacant::all();
		//$this->data['employeesActive'] =   'active';
        $this->data['employees2Active']    =   'active';
		return View::make('admin.vacant.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  
      $this->data['department']      =     ['1'];
      $this->data['employees2Active']    =   'active';
    return View::make('admin.vacant.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $input)
    {
        // 

      //  return	$this->validate($input=input::all(),Vacant::rules('
        //$this input::all(); - please remember
        //return	$this->validate($input,Employee::rules('create'));
       	$this->validate($input,[
		'PlaceOfAssignment'    =>  'required|min:5',
	'PositionTitle'      =>  'required|min:5'

    ]);
    
  
     vacant::create([
        'name' => $input['PlaceOfAssignment'],
        'salary'     => $input['PositionTitle']

    ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin\vacant  $vacant
     * @return \Illuminate\Http\Response
     */
    public function show(vacant $vacant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin\vacant  $vacant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     //   $this->data['vacant'] ='okay';
        $this->data['vacant'] = vacant::find($id);
        $this->data['employees2Active'] = 'active';
		return View::make('admin.vacant.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin\vacant  $vacant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
	{
$input=input::all();


        DB::table('vacants')->where('ID',$id)->update([
           'name'			=> $input['placeOfAssignment'],
		   'Position'		=> $input['positionTitle'],
		   'Plantilla'		=> $input['plantillaItemNo'],
		   'Pay'			=> $input['payGrade'],
		   'Salary'			=> $input['monthlySalary'],
		   'Eligibility'	=> $input['Eligibility'],
		   'Education'		=> $input['Education'],
		   'Training'		=> $input['Training'],
		   'Experience'		=> $input['workExperience'],
		   'Competency'		=> $input['competency'],
		   'Instruction'	=> $input['Instruction'],
		   'PostingDate'	=> date('Y-m-d',strtotime( $input['postingDate'])),
		 //  'ClosingDate'	=> $input['closingDate'],
        ]);
        Session::flash('success',"<strong></strong> updated successfully");
		return Redirect::route('admin.vacant.index',$id);

	}


    public function update1($id)
    {
        //

        return $id;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin\vacant  $vacant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        vacant::where('ID', '=', $id)->delete();
        $output['success'] = 'deleted';
        return Response::json($output, 200);
    }
}
