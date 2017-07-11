<?php

namespace App;

use App\Industry;

class Opportunity extends Model
{
    //
    public function industry(){
    	return $this->belongsTo(Industry::class);
    }
}
