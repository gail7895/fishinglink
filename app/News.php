<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'rental_Listing' => 'required',
        'items' => 'required',
        'condition' => 'required',
        'body' => 'required',
        );
}
