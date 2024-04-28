<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stage;
use App\Models\affectation;
use App\Models\encadrant;
use App\Models\universite;

class searchController extends Controller
{
    public function index()
    { 
        
        $stages = (stage::all());
        $affectations = (affectation::all());
        $encadrants = (encadrant::all());
        $universites = (universite::all());
        return view('/layoutsNav2/search',compact('stages','affectations','encadrants','universites')); 
    }

    public function show(Request $request)
{
    $query = Stage::query();
    $stages = (stage::all());
    $affectations = (affectation::all());
    $encadrants = (encadrant::all());
    $universites = (universite::all());

    // Check each combination of search criteria and apply the corresponding conditions
    if ($request->filled('theme')) {
        $query->where('theme', 'like', '%' . $request->input('theme') . '%');
    }

    if ($request->filled('type_stage')) {
        $query->where('type_stage', 'like', '%' . $request->input('type_stage') . '%');
    }

    if ($request->filled('level')) {
        $query->where('level', 'like', '%' . $request->input('level') . '%');
    }

    if ($request->filled('structuresAffectation_id')) {
        $query->where('structuresAffectation_id', $request->input('structuresAffectation_id'));
    }

    if ($request->filled('encadrant_id')) {
        $query->where('encadrant_id', $request->input('encadrant_id'));
    }

    if ($request->filled('etablissement_id')) {
        $query->where('etablissement_id', $request->input('etablissement_id'));
    }

    if ($request->filled('speciality')) {
        $query->where('speciality', 'like', '%' . $request->input('speciality') . '%');
    }

    if ($request->filled('year')) {
        $query->where('year', $request->input('year'));
    }

    // Handle the "En cours ?" radio button
    if ($request->filled('en_cours')) {
        if ($request->input('en_cours') == 'oui') {
            $query->where('end_date', '>', now());
        } elseif ($request->input('en_cours') == 'non') {
            $query->where('end_date', '<=', now());
        }
    }

    $result = $query->get();
    $count = 0;
    foreach ($result as $r)
        {
            $count++;
        }



    return view('/layoutsNav2/search', compact('result','stages','affectations','encadrants','universites','count'));
}

}
