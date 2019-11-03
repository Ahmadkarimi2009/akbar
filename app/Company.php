<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['status'];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function companyphone(){
        return $this->hasMany('App\CompanyPhone', 'company_id');
    }
    public function companyEmail(){
        return $this->hasMany('App\CompanyEmail', 'company_id');
    }
    public function jobs(){
        return $this->hasMany('App\Jobs', 'company_id');
    }
}
