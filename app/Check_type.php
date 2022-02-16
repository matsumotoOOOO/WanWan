<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check_type extends Model
{
    public function check_points()
    {
        return $this->hasMany('App\Check_point');
    }

}
