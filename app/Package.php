<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;
class Package extends Model
{
    public static function boot(){
        parent::boot();
        parent::observe(new \App\Observers\PackageObserver);
    }
    public function items(){
        return $this->belongsToMany(Item::class,'package_items');
    }
}
