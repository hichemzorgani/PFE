<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\affectation;

class StatistiqueController extends Controller
{
    public function index()
    {
        $affectations = (affectation::all());
        return view('/layouts/statistique',compact('affectations'));
    }
}
