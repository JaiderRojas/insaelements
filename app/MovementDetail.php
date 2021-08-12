<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovementDetail extends Model
{
	//relacion alcontraria muchos detalles tiene un movimiento.
     public function movements(){
        return $this->belongsTo('App\Movement');
    }
    //relacion alcontraria muchos detalles tiene un elemento
    public function element(){
    	return $this->belongsTo('App\Element');
    }
    public function elementInventory(){
    	return $this->hasOneThrough('App\Inventory', 'App\Element', 'element_name', 'element_id', 'id', 'id');
    }


}

