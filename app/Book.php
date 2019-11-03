<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function bookcategory(){
    	return $this->belongsTo('App\BookCategory', 'category_id');
    }
}
