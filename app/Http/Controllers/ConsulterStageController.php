<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stage;
use App\Models\stagiaire;

class ConsulterStageController extends Controller
{
    public function index()
    {
        $stages = (stage::all());
        $stagiaires = (Stagiaire::all());
        return view('/layoutsNav3/consulterstage',compact('stages','stagiaires'));
    }
}
