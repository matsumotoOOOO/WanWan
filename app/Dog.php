<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $guarded = array('id');
    protected $fillable = ['dog_name', 'dog_kind'];

    public static $rules = array(
        'dog_name' => 'required',
        'dog_kind' => 'required',
    );
    
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function checks()
    {
        return $this->hasMany('App\Check');
    }
}
