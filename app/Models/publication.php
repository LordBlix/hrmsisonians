<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class publication extends \Eloquent implements Authenticatable
{

    use AuthenticableTrait;
Public static function rules($action, $id=false, $merge=[])
{
    
    $rules =[

        'create'    =>  [

                '',
        ],
    ];



}



    //
    protected $fillable = [

'name',
    ];
}
