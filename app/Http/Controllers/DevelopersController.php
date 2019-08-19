<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Developer;

class DevelopersController extends Controller
{
    //Get all Developers
    public function index()
    {
    	return Developer::all();
    }
}