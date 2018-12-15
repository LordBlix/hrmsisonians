<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AdminBaseController extends Controller {

  //  protected  $data = [];


    public function __construct()
    {
		$this->middleware(function ($request, $next) {
			$this->data['setting'] = Setting::all()->first();

		//	if (!isset($this->data['setting']) && count($this->data['setting']) == 0) {
		//		die('Database not uploaded.Please Upload the database');
	//		}
			//if (count($this->data['setting'])) {

		//	}
			$this->data['loggedAdmin'] = Auth::guard('admin')->user();
			$this->data['pending_applications'] = Attendance::where('application_status', '=', 'pending')->get();

			return $next($request);
		});

    }


	protected function setupLayout()
	{
//		if ( ! is_null($this->layout))
//		{
//			$this->layout = View::make($this->layout);
//		}
	}

}
