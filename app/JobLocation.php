<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobLocation extends Model
{
    public function job(){
    	return $this->belongsTo('App\JOb', 'job_id');
    }
}
