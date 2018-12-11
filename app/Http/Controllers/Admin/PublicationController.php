<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminBaseController;
use App\models\publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PublicationController extends AdminBaseController
{

    public function __construct()
    {
    parent::__construct();
    $this->data['employeesOpen'] =   'active open';
    $this->data['pageTitle'] = 'ONLINE PUBLICATION AND RECRUITMENT';
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['publications'] = publication::all();
        $this->data['employees3Active'] = 'active';
    return View::make('admin.publication.index', $this->data);


        //

      //  return 'publication';
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
     * @param  \App\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, publication $publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(publication $publication)
    {
        //
    }
}
