<?php

namespace App;

use App\Opportunity;

class Industry extends Model
{
    //
    public function opportunities(){
    	return $this->hasMany(Opportunity::class);
    }
}
