<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stage;

class StageController extends Controller
{
    public function index()
    {
        $stages = (stage::all());
        return view('/layoutsNav2/stage',compact('stages'));
    }
}
