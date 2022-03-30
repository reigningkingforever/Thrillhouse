<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Item extends Model
{
    protected $fillable = ['name','detail','sku','category_id','rating','amount'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
