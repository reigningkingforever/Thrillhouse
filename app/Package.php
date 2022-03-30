<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public static function boot(){
        parent::boot();
        parent::observe(new \App\Observers\PackageObserver);
    }
}
