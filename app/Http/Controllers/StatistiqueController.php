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
    
    foreach ($affectations as $affectation) 
    {
        $quota_dispo = 0;
        $pourcentage_dispo = 0;

        foreach ($stages as $stage) 
        {
            if ($affectation->id == $stage->structure_affectation_id) 
            {
                $quota_dispo = $affectation->quota_pfe - 1;
                $pourcentage_dispo = ($quota_dispo * 100) / $affectation->quota_pfe;
                break ; // Exit the inner loop once we find a match
            }
            else
            {
                $quota_dispo = $affectation->quota_pfe;
                $pourcentage_dispo = 100;
            }
        }
        

        $quota_dispos[] = $quota_dispo;
        $pourcentage_dispos[] = $pourcentage_dispo;
    }
        return view('/layouts/statistique',compact('affectations','quota_dispos','pourcentage_dispos','stages'));
    }
}
