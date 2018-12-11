<?php
namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;

class Expense extends \Eloquent  {

    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'itemName'
            ]
        ];
    }

	// Add your validation rules here
	public static $rules = [
		 'itemName' => 'required',
         'price'     =>  'required'
	];



	// Don't forget to fill this array
	protected $fillable = [];

    protected $guarded  =   ['id'];

}