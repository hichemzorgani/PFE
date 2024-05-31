<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\affectation;
use App\Models\stage;

class StatistiqueController extends Controller
{
    public function index()
{
    $operation = 0;

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
            if ($stage->type_stage == "pfe" && $affectation->id == $stage->structuresAffectation_id) 
            {
                $stageCount++;
            }
        }

        $quota_dispo = $affectation->quota_pfe - $stageCount; // Adjust quota based on stage count
        $pourcentage_dispo = number_format(($quota_dispo * 100) / $affectation->quota_pfe, 1);

        if($pourcentage_dispo == 0)
        {
            $pourcentage_dispo =0;
        }
        if($pourcentage_dispo == 100)
        {
            $pourcentage_dispo =100;
        }

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
            if ($stage->type_stage == "immersion" && $affectation->id == $stage->structuresAffectation_id) 
            {
                $stageCount++;
            }
        }

        $quota_dispo = $affectation->quota_im - $stageCount;// Adjust quota based on stage count
        if ($quota_dispo < 0)
        {
            $quota_dispo =0;
        }
        $pourcentage_dispo = number_format(($quota_dispo * 100) / $affectation->quota_im, 1);

        if($pourcentage_dispo == 0)
        {
            $pourcentage_dispo =0;
        }
        if($pourcentage_dispo == 100)
        {
            $pourcentage_dispo =100;
        }
        
        $quota_dispos_im[] = $quota_dispo;
        $pourcentage_dispos_im[] = $pourcentage_dispo;

        // Keep track of stage count for each affectation
        $affectationStagesCount_im[$affectation->id] = $stageCount;
    }

    return view('/layouts/statistique', compact('affectations', 'quota_dispos_pfe','quota_dispos_im', 'pourcentage_dispos_pfe','pourcentage_dispos_im', 'stages', 'affectationStagesCount_pfe','affectationStagesCount_im','operation'));
}

public function search(Request $request)
    {   
      

       
        
        $operation = 1;

        $affectationID = $request->input('structuresAffectation_id');


        $stages = Stage::all();
        $affectations = Affectation::all();
        $quota_disposR = [];
        $pourcentage_disposR = [];
        $affectationStagesCount_pfeR = []; // Associative array to track stage count for each affectation
        $affectationStagesCount_immR = [];

        // recherche de type stage pfe 

        foreach ($affectations as $affectation) 
        {
            $stageCountR = 0;

            if ($affectation->id == $affectationID)
        {
            foreach ($stages as $stage) 
        {
            if ($stage->type_stage == "pfe" && $affectation->id == $stage->structuresAffectation_id) 
            {
                $stageCountR++;
            }
        }

        $quota_dispoR = $affectation->quota_pfe - $stageCountR; // Adjust quota based on stage count
        $pourcentage_dispoR = number_format(($quota_dispoR * 100) / $affectation->quota_pfe, 1);

        if($pourcentage_dispoR == 0)
        {
            $pourcentage_dispoR =0;
        }
        if($pourcentage_dispoR == 100)
        {
            $pourcentage_dispoR =100;
        }

        $quota_dispos_pfeR = $quota_dispoR;
        $pourcentage_dispos_pfeR = $pourcentage_dispoR;

        // Keep track of stage count for each affectation
        $affectationStagesCount_pfeR = $stageCountR;

        }

        }

        // recherche de type stage immersion

        foreach ($affectations as $affectation) 
    {
        $stageCountR = 0; 

        if ($affectation->id == $affectationID)
        {


            foreach ($stages as $stage) 
        {
            if ($stage->type_stage == "immersion" && $affectation->id == $stage->structuresAffectation_id) 
            {
                $stageCountR++;
            }
        }

        $quota_dispoR = $affectation->quota_im - $stageCountR;
        if ($quota_dispoR < 0)
        {
            $quota_dispoR =0;
        }
        $pourcentage_dispoR = number_format(($quota_dispoR * 100) / $affectation->quota_im, 1);

        if($pourcentage_dispoR == 0)
        {
            $pourcentage_dispoR =0;
        }
        if($pourcentage_dispoR == 100)
        {
            $pourcentage_dispoR =100;
        }
        
        $quota_dispos_imR = $quota_dispoR;
        $pourcentage_dispos_imR = $pourcentage_dispoR;

        // Keep track of stage count for each affectation
        $affectationStagesCount_imR = $stageCountR;

        }

        
    }
         
        
    return view('/layouts/statistique', compact('affectations', 'quota_dispos_pfeR','quota_dispos_imR', 'pourcentage_dispos_pfeR','pourcentage_dispos_imR', 'stages', 'affectationStagesCount_pfeR','affectationStagesCount_imR','operation','affectationID'));
        
    }
}
