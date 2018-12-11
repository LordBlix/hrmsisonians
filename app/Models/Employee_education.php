<?php
namespace App\Models;

class Employee_education extends \Eloquent {

    protected $table = 'employee_education';
	protected $fillable = [];
    protected $guarded  =['id'];
    protected $date = [
        'start_date',
        'end_date',
        'graduation_year',
        'created_at',
        'updated_at'
    ];


	public function employeeDetails(){

		return $this->belongsTo(Employee::class,'employeeID','employeeID');
	}
}
