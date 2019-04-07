<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected  $fillable = [
        'title1','title2','short_description','description','image_url',
    ];
}
