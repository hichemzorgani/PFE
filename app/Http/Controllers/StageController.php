<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StageController extends Controller
{
    public function index()
    {
       
        return view('/layoutsNav2/stage');
    }
}
