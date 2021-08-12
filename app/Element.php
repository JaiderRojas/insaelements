<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Inventory;
use App\MovementDetail;

class Element extends Model
{
	//relacion 1 elemento tiene muchos inventarios
    public function inventories(){
        return $this->hasMany('App\Inventory');
    }
    //relacion 1 elemento tiene muchos detalles

    public function movement_details(){
    	return $this->hasMany('App\MovementDetail');
    }



}
