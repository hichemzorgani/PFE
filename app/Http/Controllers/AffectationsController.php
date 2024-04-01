<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\affectation;
use App\Models\ecole;

class AffectationsController extends Controller
{
    public function index()
    {
        $affectations = (affectation::all());
        $ecoles = (ecole::all());
        return view('/layouts/affectations',compact('affectations'),compact('ecoles'));
        
    }
    public function create()
    {
        return view('/layouts/Creation/createAffectation');
    }
    public function store(Request $request){

        $ecoles = (ecole::all());

        $nom = $request->nom;
        $type = $request->type;
        $quota_pfe = $request->quota_pfe;
        $quota_im = $request->quota_im;
        $structure_iap_id = $request->structure_iap_id;
        $nom_ecole = $request->nom_ecole;

        foreach ($ecoles as $ecole)
        {
            if ($ecole->nom == $nom_ecole)
            {
                $structure_iap_id = $ecole->id;
            }
        }

        //validation
        $request->validate([
            'nom'=>'required'
        ]);

        //insertion
        affectation::create([
            'nom' => $nom,
            'type' => $type,
            'quota_pfe' => $quota_pfe,
            'quota_im' => $quota_im, 
            'structure_iap_id' => $structure_iap_id,     
        ]);
        
        return redirect()->route('affectations.index');
    }
    public function edit (Affectation $affectation){
        $affectations = (affectation::all());
        $ecoles = (ecole::all());
        return view('Layouts/modifier/editaffectations',compact('ecoles'),compact('affectation'));
    }
    public function update (Request $request , Affectation $affectation){
        $validatedData = $request->validate([
            'nom'=>'required',
            'type' => 'required',
            'quota_pfe' => 'required',
            'quota_im' => 'required',
            'structure_iap_id' => 'required',
            //'nom_ecole' => 'required',
        ]);
        $affectation->fill($validatedData)->save();
        return to_route('affectations.index');
    }
    public function destroy(Affectation $affectation){
        $affectation->delete();
        return to_route('affectations.index');
    }
}
