<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mcategory extends Model
{
    protected $fillable = [
        'name',
    ];

    public function menu(){
        return $this->hasMany('App\Menu','category_id');
    }

}
