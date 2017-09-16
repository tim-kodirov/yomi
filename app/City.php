<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    public function managers()
    {
    	return $this->hasMany('App\Manager', 'city_id', 'id');
    }
}
