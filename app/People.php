<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'people';

    protected $fillable = ['name', 'personal_email', 'cargo'];

    public function responsabilities()
    {
        return $this->hasMany('App\Responsability');
    }
    public function inventories()
    {
        return $this->hasMany('App\Inventory');
    }
}
