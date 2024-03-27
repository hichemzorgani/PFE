<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\encadrant;

class EncadrantController extends Controller
{
    public function index()
    {
        $encadrants = (encadrant::all());
        return view('/layouts/encadrant',compact('encadrants'));
        
    }
    public function create()
    {
        return view('/layouts/Creation/createEncadrant');
    }
    public function store(Request $request){

        $nom = $request->nom;
        $prenom = $request->prenom;
        $matricule = $request->matricule;
        $email = $request->email;
        $structure_affectation_id = $request->structure_affectation_id;

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
}
