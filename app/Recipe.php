<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['name', 'instructions', 'prep_time', 'cook_time', 'source'];

}
