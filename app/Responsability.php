<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsability extends Model
{
	protected $table = 'responsabilities';

	protected $fillable =  [
		'responsible_movement', 'fecha', 'movement_id', 'id_cliente', 'id_usuarios',

	];

    public function movements(){
        return $this->belongsTo('App\Movement');
    }
    public function people(){
       return $this->belongsTo('App\People');
    }

}
