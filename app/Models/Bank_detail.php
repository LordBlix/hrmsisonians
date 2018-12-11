<?php
namespace App\Models;

class Bank_detail extends \Eloquent {
	protected $fillable = [];
    protected $guarded=[''];

	public function employeeDetails(){

		return $this->belongsTo(Employee::class,'employeeID','employeeID');
	}
}