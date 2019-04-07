<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siteconfig extends Model
{
    protected $fillable =  [
        'title','site_logo','facebook','twitter','youtube','pinterest','menutitle','menudescription','gallerytitle','gallerydescription'
        ];
}
