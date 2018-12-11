<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminBaseController;
use Illuminate\Support\Facades\View;
use App\Models\retirable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class RetirableController extends AdminBaseController 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     
    public function __construct()
    {
        parent::__construct();
        $this->data['employeesOpen'] ='active open';
		$this->data['pageTitle'] ='NO. OF RETIRABLES (NEXT FIVE YEARS - 65)';
		
    }
    public function index()
    {
        //


      
        $this->data['retirables']       =    retirable::all();
       $this->data['employees1Active']    =   'active';
		return View::make('admin.retirable.index', $this->data);

     // $this->data['pageTitle'] = 'Retirables';
     // $this->data['employees1Active']    =   'active';
     // return view::make('admin.retirable.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->data['department'] = ['1'];
        $this->data['employees1Active'] = 'active';
        return View::make('admin.retirable.create',$this->data);
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
      
        $this->validate($input, retirable::rules('create'));
  //      $this->validate($input,[
    //        'nameOfRetirableName' => 'required|min:5',
        //    'PositionTitle'     =>  'required|min:5'
      //  ]);

        retirable::create([
            'name' => $input['nameOfRetirableName'],

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\retirable  $retirable
     * @return \Illuminate\Http\Response
     */
    public function show(Request $input)
    {
        //

      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\retirable  $retirable
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $this->data['retirables'] = retirable::find($id);
        $this->data['employees1Active']    =   'active';
        return view::make('admin.retirable.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\retirable  $retirable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $input)
    {
        //
        return $input;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\retirable  $retirable
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       retirable::where('ID', '=', $id)->delete();
       $output['success']  =   'deleted';
		return Response::json($output, 200);
    }
}
