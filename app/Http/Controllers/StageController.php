<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stage;
use App\Models\encadrant;

class StageController extends Controller
{
    public function index()
    {
        $stages = (stage::all());
        $encadrants = (stage::all());
        return view('/layoutsNav2/stage',compact('stages','encadrants'));
    }
}
