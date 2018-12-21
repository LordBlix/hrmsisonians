<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminBaseController;
use App\Models\awards_profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class AwardsProfileController extends AdminBaseController
{



    public function __construct()
    {

        parent::__construct();
        $this->data['awardsOpen'] = 'active open';
        $this->data['pageTitle'] = 'Awards Profile';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->data['rewardActive'] ='active';

        return View::make('admin.awardprofile.index', $this->data);
       // return 'okay';
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
     * @param  \App\awards_profile  $awards_profile
     * @return \Illuminate\Http\Response
     */
    public function show(awards_profile $awards_profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\awards_profile  $awards_profile
     * @return \Illuminate\Http\Response
     */
    public function edit(awards_profile $awards_profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\awards_profile  $awards_profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, awards_profile $awards_profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\awards_profile  $awards_profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(awards_profile $awards_profile)
    {
        //
    }
}
