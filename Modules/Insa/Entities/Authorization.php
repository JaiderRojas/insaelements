<?php

namespace Modules\Insa\Entities;

use Illuminate\Database\Eloquent\Model;
use App\People;
use Modules\Insa\Entities\Loan;

class Authorization extends Model
{

     public function people(){
        return $this->belongsTo('App\People');
    }
      public function loans(){
        return $this->belongsTo('Modules\Insa\Entities\Loan');
    }
}
