<?php

/**
 * Developer CLass
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developers extends Model
{
    //Create a fillable
    protected $fillable = ['name','type'];
}
