<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    public function book(){
    	return $this->hasMany('App\Book', 'category_id');
    }
}
