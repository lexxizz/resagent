<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $table="goods";

    protected $fillable=['title', 'category_id', 'place_id'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function place(){
        return $this->belongsTo('App\Place');
    }
}
