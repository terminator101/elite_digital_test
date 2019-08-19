<?php

/**
 * Developer CLass
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    //Create a fillable
    protected $fillable = ['name','type'];
}
