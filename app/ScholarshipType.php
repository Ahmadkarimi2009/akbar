<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScholarshipType extends Model
{
    public function scholarship(){
    	return $this->belongsTo('App\Scholarship', 'scholarship_id');
    }
}
