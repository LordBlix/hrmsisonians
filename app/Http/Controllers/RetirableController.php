<?php

namespace App\Http\Controllers;

use App\retirable;
use Illuminate\Http\Request;

class RetirableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

      //  return 'retirables';

      $people=retirable::all();
      return view('admin/retirables.index', ['name' => 'marian']);


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
     * @param  \App\retirable  $retirable
     * @return \Illuminate\Http\Response
     */
    public function show(retirable $retirable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\retirable  $retirable
     * @return \Illuminate\Http\Response
     */
    public function edit(retirable $retirable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\retirable  $retirable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, retirable $retirable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\retirable  $retirable
     * @return \Illuminate\Http\Response
     */
    public function destroy(retirable $retirable)
    {
        //
    }
}
