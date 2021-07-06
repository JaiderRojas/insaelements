<?php

namespace Modules\Insa\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Element;
use Modules\Insa\Entities\Authorization;
use Modules\Insa\Entities\Vigilant;

class Loan extends Model
{
    protected $fillable = ['loan_date', 'delivery_date', 'dependencies', 'translation', 'objetive', 'element_quantity'];


     public function elements(){
        return $this->hasmany('App\Element');
    }
       public function authorizations(){
        return $this->hasmany('Modules\Insa\Entities\Authorization');
    }
     public function vigilants(){
        return $this->hasmany('Modules\Insa\Entities\Vigilant');
    }

}
