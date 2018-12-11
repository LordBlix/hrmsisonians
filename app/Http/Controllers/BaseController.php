<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;

class BaseController extends Controller {

    protected  $data = [];

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
    public function __construct()
    {
        $this->data['setting']    = Setting::all()->first();
    }


	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}


}

