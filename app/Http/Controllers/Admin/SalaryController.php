<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Models\Salary;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SalaryController extends AdminBaseController
{

    public function store()
    {

        $validator = Validator::make($input = Input::all(), Salary::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        Salary::create($input);
        Session::flash('success',"<strong>{$input['type']}</strong> Created");
        return Redirect::route('admin.employees.edit',Input::get('employeeID'));
    }


	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /salary/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Salary::destroy($id);
        $output['success']  =   'deleted';
        $output['msg']      =   'Salary Deleted successfully';
        return Response::json($output, 200);
	}

}