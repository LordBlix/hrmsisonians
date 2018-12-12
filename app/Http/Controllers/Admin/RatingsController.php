<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminBaseController;
use App\Models\Ratings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use PdfReport;
use App\Models\Employee;
use DB;
use PDF;

class RatingsController extends AdminBaseController
{


    public function __construct()
	{
		parent::__construct();
		$this->data['performanceOpen'] =   'active open';
		$this->data['pageTitle']     =   'RATING PROFILES (PER SEMESTER)';
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['employees'] = Employee::all();

        return View::make('admin.ratings.index', $this->data);

    } 



    public function downloadPDF(){
        $data = ['title' => 'Welcome to HDTuto.com'];

        $pdf = PDF::loadView('admin.ratings.pdf');


        return $pdf->stream();
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
     * @param  \App\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function show(Ratings $ratings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function edit(Ratings $ratings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ratings $ratings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ratings $ratings)
    {
        //
    }
}
