<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siteconfig extends Model
{
    protected $fillable = [
        'saturday','sunday','monday','tuesday','wednesday','thursday','friday',
        'copyright',
        'email', 'map', 'location', 'phone', 'contact_us', 'title', 'site_logo', 'facebook', 'twitter', 'youtube',
        'pinterest', 'menutitle', 'menudescription', 'gallerytitle', 'gallerydescription'
    ];
}
