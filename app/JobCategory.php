<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    protected $fillable = ['name'];

    public function jobs(){
    	return $this->hasMany('App\Jobs', 'category_id');
    }
}
