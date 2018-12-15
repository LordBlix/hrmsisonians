<?php

namespace App\Http\Controllers\Admin;

use App\vacancies;
use Illuminate\Http\Request;
//namespace App\Http\Controllers\Admin;

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

use Maatwebsite\Excel\Exporter;
use App\Exports\YourExport;
use App\Imports\YourImport;

class VacancyController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $people=vacancies::all();
        return view('admin.vacancies.index', compact('people'));
            //
            $this->data['people'] = 'dddddd';
            //$this->data['people'] = 'ddddddd';
            
                    return view::make('admin.vacancies.index', $this->data);
         
            $art->Name = 'Mona Lisassss';
        
            $art->save();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    

        return View::make('admin.vacancies.create');
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

     	//$this input::all(); - please remember
	return	$this->validate($input,Employee::rules('create'));
	//$this->validate($input,[
	//	'employeeID'    =>  'required|min:5',
//		'fullName'      =>  'required|min:5'

	//]);


  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function show(vacancies $vacancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function edit(vacanies $vacancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vacancies $vacancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(vacancy $vacancy)
    {
        //
    }

    
}
