<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    public function scholarshiptype(){
    	return $this->hasMany('App\ScholarshipType', 'scholarship_id');
    }
    public function scholarshipdegree(){
    	return $this->hasMany('App\ScholarshipDegree', 'scholarship_id');
    }
}
