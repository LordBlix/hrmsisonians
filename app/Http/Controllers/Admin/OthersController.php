<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
class OthersController extends AdminBaseController
{
    //
public function __construct()

{

parent::__construct();
$this->data['othersOpen'] = 'active';
$this->data['pageTitle'] = 'Agency Background';

}



    Public function index()
    {
        $this->data['na'] = 'Marilyn';
        $this->data['surname'] = 'Adlawan';
        $this->data['place'] = 'Lower Libas, Taganaan, Surigao del Norte';
        $this->data['birth'] = '1965-06-17';
        $this->data['name'] = 'Adlawan';
            return View::make('admin.others.index', $this->data);


    }
}
