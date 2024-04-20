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
    $affectationStagesCount_pfe = []; // Associative array to track stage count for each affectation
    $affectationStagesCount_imm = []; 

    foreach ($affectations as $affectation) 
    {
        $stageCount = 0; // Initialize stage count for each affectation

        foreach ($stages as $stage) 
        {
            if ($stage->type_stage == "pfe" && $affectation->id == $stage->structure_affectation_id) 
            {
                $stageCount++;
            }
        }

        $quota_dispo = $affectation->quota_pfe - $stageCount; // Adjust quota based on stage count
        $pourcentage_dispo = ($quota_dispo * 100) / $affectation->quota_pfe;

        $quota_dispos_pfe[] = $quota_dispo;
        $pourcentage_dispos_pfe[] = $pourcentage_dispo;

        // Keep track of stage count for each affectation
        $affectationStagesCount_pfe[$affectation->id] = $stageCount;
    }

    foreach ($affectations as $affectation) 
    {
        $stageCount = 0; // Initialize stage count for each affectation

        foreach ($stages as $stage) 
        {
            if ($stage->type_stage == "immersion" && $affectation->id == $stage->structure_affectation_id) 
            {
                $stageCount++;
            }
        }

        $quota_dispo = $affectation->quota_im - $stageCount; // Adjust quota based on stage count
        $pourcentage_dispo = ($quota_dispo * 100) / $affectation->quota_im;

        $quota_dispos_im[] = $quota_dispo;
        $pourcentage_dispos_im[] = $pourcentage_dispo;

        // Keep track of stage count for each affectation
        $affectationStagesCount_im[$affectation->id] = $stageCount;
    }

    return view('/layouts/statistique', compact('affectations', 'quota_dispos_pfe','quota_dispos_im', 'pourcentage_dispos_pfe','pourcentage_dispos_im', 'stages', 'affectationStagesCount_pfe','affectationStagesCount_im'));
}
}
