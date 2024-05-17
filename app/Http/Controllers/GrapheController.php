<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\stage;

class GrapheController extends Controller
{
    public function index()
    {   
        $C0 = 0;
        $C1 = 0;
        $C2 = 0;
        $C3 = 0;
        $C4 = 0;
        $C5 = 0;
        $C6 = 0;
        $C7 = 0;
        $C8 = 0;
        $C9 = 0;
        $C10 = 0;
        $C11 = 0;
        $C12 = 0;
        $C13 = 0;
        $C14 = 0;
        $C15 = 0;

        $stages = (stage::all());
        $currentYear = Carbon::now()->year;
          foreach ($stages as $stage){

           if ($stage->year == $currentYear - 15){
            $C15++;
           }
           if ($stage->year == $currentYear - 14){
            $C14++;
           }
           if ($stage->year == $currentYear - 13){
            $C13++;
           }
           if ($stage->year == $currentYear - 12){
            $C12++;
           }
           if ($stage->year == $currentYear - 11){
            $C11++;
           }
           if ($stage->year == $currentYear - 10){
            $C10++;
           }
           if ($stage->year == $currentYear - 9){
            $C9++;
           }
           if ($stage->year == $currentYear - 8){
            $C8++;
           }
           if ($stage->year == $currentYear - 7){
            $C7++;
           }
           if ($stage->year == $currentYear - 6){
            $C6++;
           }
           if ($stage->year == $currentYear - 5){
            $C5++;
           }
           if ($stage->year == $currentYear - 4){
            $C4++;
           }
           if ($stage->year == $currentYear - 3){
            $C3++;
           }
           if ($stage->year == $currentYear - 2){
            $C2++;
           }
           if ($stage->year == $currentYear - 1){
            $C1++;
           }
           if ($stage->year == $currentYear){
            $C0++;
           }
        }

        return view('/layoutsNav2/graphe',compact('C0','C1','C2','C3','C4','C5','C6','C7','C8','C9','C10','C11','C12','C13','C14','C15','currentYear'));
    }
}
