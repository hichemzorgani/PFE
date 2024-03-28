<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatistiquesController extends Controller
{
    public function index()
    {
       
        return view('/layoutsNav2/statistique2');
    }
}
