<?php

namespace App;

use App\Item;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','details'];
    public function items(){
        return $this->hasMany(Item::class);
    }
}
