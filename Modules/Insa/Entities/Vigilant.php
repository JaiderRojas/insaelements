<?php

namespace Modules\Insa\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Insa\Entities\Loan;
use App\People;
class Vigilant extends Model
{
    //protected $fillable = [];
    public function loans(){
        return $this->belongsTo('App\Loan');
    }
    public function people(){
        return $this->belongsTo('App\People');
    }
}
