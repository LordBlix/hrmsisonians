<?php
namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Admin extends \Eloquent implements Authenticatable
{
	use AuthenticableTrait;


    public  static $rules=[
        'name'  =>  'required',
        'email' =>  'required|email'
    ];

    public  static $rules_password=[
        'password'              =>  'required|confirmed',
        'password_confirmation' =>  'required|min:5'
    ];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
    protected $fillable = ['name' ,'email', 'password'];

}
