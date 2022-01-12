<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'news_id' => 'required',
        'edited_at' => 'required',

    );
    // News Modelに関連付けを行う
    public function news()
    {
        return $this->belongsTo('App\News');
    }
}