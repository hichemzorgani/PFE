<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\stage;
use App\Models\affectation;
use App\Models\ecole;
use App\Models\encadrant;
use App\Models\universite;

class GrapheController extends Controller
{
    public function index()
    {   
        $C0 = 0;
        $C1 = 0;
        $C2 = 0;
        $C3 = 0;
        $li = 0;
        $ma = 0;
        $do = 0;
        $in = 0;
        $ts = 0;

        $stages = (stage::all());
        $affectations = (affectation::all());
        $ecoles = (ecole::all());
        $encadrants = (encadrant::all());
        $universites = (universite::all());
        $currentYear = Carbon::now()->year;
          foreach ($stages as $stage){

           
           if ($stage->year == $currentYear){
            $C0++;
           }
           if ($stage->year == $currentYear && $stage->cloture == 1){
            $C1++;
           }
           if ($stage->year == $currentYear && $stage->cloture == 0){
            $C2++;
           }
           if ($stage->year == $currentYear && $stage->stage_annule == 1){
            $C3++;
           }
           if ($stage->year == $currentYear && $stage->level == "licence"){
            $li++;
           }
           if ($stage->year == $currentYear && $stage->level == "master"){
            $ma++;
           }
           if ($stage->year == $currentYear && $stage->level == "doctorat"){
            $do++;
           }
           if ($stage->year == $currentYear && $stage->level == "ingénieur"){
            $in++;
           }
           if ($stage->year == $currentYear && $stage->level == "TS"){
            $ts++;
           }

        }

        return view('/layoutsNav2/graphe',compact('C0','C1','C2','C3','li','ma','do','in','ts','currentYear','stages','affectations','ecoles','encadrants','universites'));
    }
}
