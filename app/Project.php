<?php

/**
 * Project CLass
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //Create a fillable
    protected $fillable = ['name','client_name','lead_developer_id'];
}
