<?php
namespace App\Models;

class Salary extends \Eloquent {

	 public  static $rules = [
		'type'   =>  'required',
		'salary' =>  'required'
	];
	protected $fillable = [];
    protected $table ='salary';
    protected $guarded = ['id'];
}