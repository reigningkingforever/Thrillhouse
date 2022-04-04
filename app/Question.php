<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['order','name','description','options','field_type','validation'];
    protected $casts = ['options'=> 'array','validation'=> 'array'];
}
