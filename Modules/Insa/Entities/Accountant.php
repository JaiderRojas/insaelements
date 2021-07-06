<?php

namespace Modules\Insa\Entities;

use Illuminate\Database\Eloquent\Model;
use App\People;
use App\Inventory;


class Accountant extends Model
{
    //protected $fillable = [];
    
     public function people(){
        return $this->belongsTo('App\People');
    }
     public function inventories(){
        return $this->hasMany('App\Inventory');
    }
    
}
