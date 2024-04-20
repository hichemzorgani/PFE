<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\affectation;
use App\Models\stage;

class StatistiqueController extends Controller
{
    public function index()
{
    $stages = Stage::all();
    $affectations = Affectation::all();
    $quota_dispos = [];
    $pourcentage_dispos = [];
    $affectationStagesCount = []; // Associative array to track stage count for each affectation

    foreach ($affectations as $affectation) 
    {
        $stageCount = 0; // Initialize stage count for each affectation

        foreach ($stages as $stage) 
        {
            if ($affectation->id == $stage->structure_affectation_id) 
            {
                $stageCount++;
            }
        }

        $quota_dispo = $affectation->quota_pfe - $stageCount; // Adjust quota based on stage count
        $pourcentage_dispo = ($quota_dispo * 100) / $affectation->quota_pfe;

        $quota_dispos[] = $quota_dispo;
        $pourcentage_dispos[] = $pourcentage_dispo;

        // Keep track of stage count for each affectation
        $affectationStagesCount[$affectation->id] = $stageCount;
    }

    return view('/layouts/statistique', compact('affectations', 'quota_dispos', 'pourcentage_dispos', 'stages', 'affectationStagesCount'));
}
}
