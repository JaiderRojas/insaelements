<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Modules\Insa\Entities\Accountant;
class Inventory extends Model
{
    protected $table = 'inventories';

    protected $fillable = ['inventoryCode', 'element_id'];
    public function elements()
    {
        return $this->belongsTo('App\Element');
    }

    public function people()
    {
        return $this->belongsTo('App\People');
    }
}
