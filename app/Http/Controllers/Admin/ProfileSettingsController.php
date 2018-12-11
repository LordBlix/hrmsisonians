<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class ProfileSettingsController extends AdminBaseController
{


    public function __construct()
    {
        parent::__construct();
        $this->data['settingOpen']  =   'active open';
        $this->data['pageTitle']    =    'Settings';
    }



	/**
	 * Show the form for editing the specified Admin.

	 */
	public function edit()
	{
		$this->data['admin'] = Admin::find(Auth::guard('admin')->user()->id);
        $this->data['profileSettingActive']    =   'active';

		return View::make('admin.profile_settings.edit', $this->data);
	}

	/**
	 * Update the specified Admin in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$admin = Admin::findOrFail(Auth::guard('admin')->user()->id);

        //name and email change
        if(Input::get('name'))
        {
            $validator = Validator::make($data = Input::all(), Admin::$rules);

            if ($validator->fails())
            {
                return Redirect::back()->withErrors($validator)->withInput();
            }
            Session::flash('success','Name and Email updated successfully');
        }
        // Password Change
        else
        {
            $validator = Validator::make($data = Input::all(), Admin::$rules_password);

            if ($validator->fails())
            {
                return Redirect::back()->withErrors($validator)->withInput();
            }
            $data['password']   =   Hash::make(Input::get('password'));
            Session::flash('success','Password changed successfully');

        }

            $admin->update($data);

		return Redirect::route('admin.profile_settings.edit',$id);
	}



}
