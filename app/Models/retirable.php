<?php

namespace app\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;

class retirable extends \Eloquent implements Authenticatable

{

    use AuthenticableTrait;

    public static function rules($action, $id=false, $merge=[])
    {

        $rules = [
            'create' =>[
            'nameOfRetirableName' => 'required|min:5',
            'PositionTitle' => 'required|min:5'
            ],

        ];

        $rules = $rules[$action];

        if($id){
            foreach ($rules as &$rule) {
                $rule = str_replace(':id', $id, $rule);

            }

        }

        return array_merge( $rules, $merge);

    }

    //
    protected $fillable = [
        'ID',
        'name',



];
}
