<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $guarded = array('id');
    //protected $fillable = array('title', 'body', 'image_path', 'created_at', 'updated_at');
    
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
   
    public function histories()
    {
        return $this->hasMany('App\History');
    }
}