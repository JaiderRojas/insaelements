<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
	protected $table = 'movements';
	protected $fillable = ['date', 'date_return', 'dependence', 'translation', 'objective'];


	//relacion de movimento detalle a movimientos 1 a m
     public function movement_details(){
        return $this->hasMany('App\MovementDetail');
    }

    //relacion de un movmiento tiene muchas responsabilidades
    public function responsabilities(){
        return $this->hasMany('App\Responsability');
    }

}
