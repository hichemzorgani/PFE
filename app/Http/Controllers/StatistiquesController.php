<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stage;

class StatistiquesController extends Controller
{
    public function index()
    {
        $stages = (stage::all());
        $count_pfe = 0;
        $count_im = 0;
        $count =0;
        $pourcentage_pfe = [];
        $pourcentage_im = [];


        foreach ($stages as $stage)
        {
            $count++;
        }

        foreach ($stages as $stage)
        {
            if ($stage->type_stage == "pfe")
            {
                $count_pfe++;
            }
            else
            {
                $count_im++;
            }
        }
         
        $formattedPercentage_pfe = number_format(($count_pfe * 100)/ $count, 1);
        $formattedPercentage_im = number_format(($count_im * 100)/ $count, 1);
        $pourcentage_pfe[] = $formattedPercentage_pfe;
        $pourcentage_im[] = $formattedPercentage_im;
        




        return view('/layoutsNav2/statistique2',compact('stages','pourcentage_pfe','pourcentage_im','count_pfe','count_im'));
    }
}
