<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check_point extends Model
{
    public function check_type()
    {
        return $this->belongsTo('App\Check_type');
    }

}
