<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScholarshipDegree extends Model
{
    public function scholarship(){
    	return $this->belongsTo('App\Scholarship', 'scholarship_id');
    }
}
