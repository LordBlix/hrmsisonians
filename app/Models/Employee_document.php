<?php
namespace App\Models;

class Employee_document extends \Eloquent {
	protected $fillable = [];
    protected $guarded  =['id'];


	public function employeeDetails(){

		return $this->belongsTo(Employee::class,'employeeID','employeeID');
	}
}