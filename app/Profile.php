<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'birth' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
    
    public function profilehistories()
    {
        return $this->hasMany('App\ProfileHistory');
    }
}
