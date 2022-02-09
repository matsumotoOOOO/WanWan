<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    protected $guarded = array('id');
    protected $fillable = ['health'];
    protected $dates = ['registerd_at','nextcheck_at'];

    public function dog()
    {
        return $this->belongsTo('App\Dog');
    }

}
