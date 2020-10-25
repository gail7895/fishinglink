<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'rental_Listing' => 'required',
        'body' => 'required',
        'items' => 'required',
        'conditon' => 'required',
        );
}
