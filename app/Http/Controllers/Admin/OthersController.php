<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
class OthersController extends AdminBaseController
{
    //

    Public function index()
    {

            return View::make('admin.others.index');


    }
}
