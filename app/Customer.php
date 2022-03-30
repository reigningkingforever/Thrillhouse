<?php

namespace App;

use App\Item;
use App\Order;
use App\Package;
use App\Appliance;
use Illuminate\Database\Eloquent\Model;
class Customer extends Model
{
    public function appliances(){
        return $this->belongsToMany(Appliance::class);
    }
    public function items(){
        return $this->belongsToMany(Item::class);
    }
    public function packages(){
        return $this->belongsToMany(Package::class);
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
    
}
