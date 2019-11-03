<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    public function company(){
    	return $this->belongsTo('App\Company', 'company_id');
    }
    public function jobcategory(){
    	return $this->belongsTo('App\JobCategory', 'category_id');
    }
    public function joblanguage(){
    	return $this->hasMany('App\JobLanguage', 'job_id');
    }
    public function jobskill(){
    	return $this->hasMany('App\JobSkill', 'job_id');
    }
    public function joblocation(){
    	return $this->hasMany('App\JobLocation', 'job_id');
    }
    public function jobemail(){
    	return $this->hasMany('App\JobEmail', 'job_id');
    }
}
