<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminBaseController;
use App\Models\competency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
class CompetencyController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        parent::__construct();
        $this->data['learningOpen'] = 'active open';
        $this->data['pageTitle'] = 'Competency Profile';
          $this->data['learningActive'] = 'active';
    }
    public function index()
    {
        
        $this->data['learningActive'] = 'active';
        $this->data['personal'] = 'active';
        $this->data['tab7']= 'tab-pane active';
        return View::make('admin.competency.index', $this->data);
        //
    }

    public function personal()
    {
        $this->data['competencies'] = competency::all();
        $this->data['personal'] = 'active';
        $this->data['tab7']= 'tab-pane active';


        return View::make('admin.competency.index', $this->data);
        
    }

    public function family()
    {
        $this->data['competencies'] = competency::all();
        $this->data['family'] = 'active';
        $this->data['tab1']= 'tab-pane active';


        return View::make('admin.competency.index', $this->data);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $input)
    {

     


  //  $this->data['competencies'] = competency::all();
   // $this->data['pageTitle'] = 'Competency Profile';

   if(Input::get('updateType')=='Personal')
 {
    $this->validate($input,[
		'employeeID'    =>  'required|min:5',
		//'fullName'      =>  'required|min:5'
    ]);
     competency::create([
        'name' => $input['employeeID'],
       'salary'     => $input['PositionTitle']



    ]);
    return Redirect::back()->with('success',"<strong>{$input['name']}</strong> successfully added to the Database")->with('errorr',$input['employeeID']);
} 
else    if(Input::get('updateType')=='Family')
{

return 'okay';


}

  //  $this->data['errorr']= $input->name;
   // return View::make('admin.competency.index', $this->data)->with('success',"<strong>{$input['fullName']}</strong> successfully added 
   // to the Database");    
    
}


    /**
     * Display the specified resource.
     *
     * @param  \App\competency  $competency
     * @return \Illuminate\Http\Response
     */
    public function show(competency $competency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\competency  $competency
     * @return \Illuminate\Http\Response
     */
    public function edit(competency $competency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\competency  $competency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, competency $competency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\competency  $competency
     * @return \Illuminate\Http\Response
     */
    public function destroy(competency $competency)
    {
        //
    }

}
