<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appliance extends Model
{

    protected $fillable = ['name','power_unit'];
    
    public static function boot(){
        parent::boot();
        parent::observe(new \App\Observers\ApplianceObserver);
    }
}
