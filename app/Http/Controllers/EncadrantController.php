<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\encadrant;
use App\Models\affectation;

class EncadrantController extends Controller
{
    public function index()
    {
        $encadrants = (encadrant::all());
        $affectations = (affectation::all());
        return view('/layouts/encadrant',compact('encadrants'),compact('affectations'));
        
    }
    public function create()
    {
        return view('/layouts/Creation/createEncadrant');
    }
    public function store(Request $request){

        $affectations = (affectation::all());

        $nom = $request->nom;
        $prenom = $request->prenom;
        $matricule = $request->matricule;
        $email = $request->email;
        $affectation_nom = $request->affectation_nom;

        foreach ($affectations as $affectation)
        {
            if ($affectation->nom == $affectation_nom)
            {
                $structure_affectation_id = $affectation->id;
            }
        }

        //validation
        $request->validate([
            'nom'=>'required'
        ]);

        //insertion
        encadrant::create([
            'nom' => $nom,
            'prenom' => $prenom,
            'matricule' => $matricule,
            'email' => $email, 
            'structure_affectation_id' => $structure_affectation_id,     
        ]);
        
        return redirect()->route('encadrant.index');
    }
    public function edit (Encadrant $encadrant){
        return view('Layouts/modifier/editEncadrant', compact('encadrant'));
    }
    public function update (Request $request , Encadrant $encadrant){
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'matricule' => 'required',
            'email' => 'required', 
            'structure_affectation_id' => 'required',    
        ]);
        $encadrant->fill($validatedData)->save();
        return to_route('encadrant.index');
    }
    public function destroy(Encadrant $encadrant){
        $encadrant->delete();
        return to_route('encadrant.index');
    }
}
