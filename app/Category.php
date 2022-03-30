<?php

namespace App;

use App\Item;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','details'];

    public static function boot(){
        parent::boot();
        parent::observe(new \App\Observers\CategoryObserver);
    }

    public function items(){
        return $this->hasMany(Item::class);
    }
}
