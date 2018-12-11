<?php
namespace App\Models;

class Designation extends \Eloquent {

	protected $fillable = [];
    protected $table    =   'designation';
    protected $guarded  = ['id'];

    protected function department()
    {
        return $this->belongsTo(Department::class,'deptID','id');
    }
}