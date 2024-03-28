<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsulterStageController extends Controller
{
    public function index()
    {
       
        return view('/layoutsNav3/consulterstage');
    }
}
