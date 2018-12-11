<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminBaseController;
use App\Models\Ratings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use PdfReport;
use App\Models\Employee;
use DB;

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
        //

        $customer_data = $this->get_customer_data();
        $this->data['users'] = Employee::all();

        return view('dynamic_pdf')->with('customer_data', $customer_data);
   //  return View::make('admin.ratings.index',$this->data);
    }

function get_customer_data()
{

    $customer_data = DB::table('tbl_customer')
                       ->limit(10)
                          ->get();
return $customer_data;
                        } 



    public function downloadPDF($id){
        $title = 'Registered User Report'; 
       return PdfReport::of($title)
         ->setPaper('a6')
         ->make();
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
