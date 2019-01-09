<?php

namespace App\Http\Controllers\Admin;

use  App\Http\Controllers\AdminBaseController;
use App\Models\spms;
use App\Models\Employee;
use App\Models\Family_background;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class SpmsController extends AdminBaseController
{

    Public function __construct()
    {
        parent::__construct();
        $this->data['performanceOpen'] = 'active open';
        $this->data['pageTitle'] = 'Spms Manual';

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $this->data['performance1Active'] ='active';
        $this->data['emps'] = 'checked';
        $this->data['bloodType'] = 'O';
        $this->data['Zip'] = '8400';
        $this->data['familyBackground'] = Family_Background::find(32);
        $this->data['employees'] = Employee::find(32);
        return View::make('admin.spms.index', $this->data);
      
    
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\spms  $spms
     * @return \Illuminate\Http\Response
     */
    public function show(spms $spms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\spms  $spms
     * @return \Illuminate\Http\Response
     */
    public function edit(spms $spms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\spms  $spms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spms $spms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\spms  $spms
     * @return \Illuminate\Http\Response
     */
    public function destroy(spms $spms)
    {
        //
    }
}
