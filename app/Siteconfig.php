<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siteconfig extends Model
{
    protected $fillable =  [
        'facebook','twitter','youtube','pinterest','menutitle','menudescription','gallerytitle','gallerydescription'
        ];
}
