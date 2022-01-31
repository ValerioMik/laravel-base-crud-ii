<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [

    'title',
    'author',
    'release_date',
    'pages',

    ];

    
}
