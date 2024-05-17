<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stage;
use App\Models\encadrant;
use App\Models\Stagiaire;

class StageController extends Controller
{
    public function index()
    {
        $stages = (stage::all());
        $stagiaires = (Stagiaire::all());
        
        
    
        return view('/layoutsNav2/stage',compact('stages','stagiaires'));
    }

    public function cloture(stage $stage)
    {
        
      $stages = (stage::all());
      $stagiaires = (stagiaire::all());
      return view('/layoutsNav2/cloture',compact('stages','stagiaires','stage'));
        
    }
    
    public function done(Request $request, Stage $stage)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'memoire' => 'required|boolean',
            'quitus' => 'required|array|min:1',
            'quitus.*' => 'integer|exists:stagiaires,id', // Ensure each quitus ID is a valid stagiaire ID
        ]);

        // Ensure at least one Stagiaire has quitus = 1
        $stagiairesWithQuitus = $validatedData['quitus'];
        $hasQuitus = false;

        foreach ($stagiairesWithQuitus as $stagiaireId) {
            $stagiaire = Stagiaire::find($stagiaireId);
            if ($stagiaire && $stagiaire->stage_id == $stage->id) {
                $stagiaire->quitus = 1;
                $stagiaire->save();
                $hasQuitus = true;
            }
        }

        if ($hasQuitus) {
            // Update the Stage model instance
            $stage->memoire = $validatedData['memoire'];
            $stage->cloture = 1; // Mark the stage as closed
            $stage->save();
        } else {
            return back()->withErrors(['quitus' => 'At least one stagiaire must have quitus set.']);
        }

        return redirect()->route('stage.index');
    }

}
