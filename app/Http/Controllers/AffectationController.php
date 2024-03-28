<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\affectation;

class AffectationController extends Controller
{
    public function index()
    {
        $affectations = (affectation::all());
        return view('/layouts/affectation',compact('affectations'));
        
    }
    public function create()
    {
        return view('/layouts/Creation/createAffectation');
    }
    public function store(Request $request){

        $nom = $request->nom;
        $type = $request->type;
        $quota_pfe = $request->quota_pfe;
        $quota_im = $request->quota_im;
        $structure_iap_id = $request->structure_iap_id;

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
        
        return redirect()->route('affectation.index');
    }
    public function edit (Affectation $affectation){
        return view('Layouts/modifier/editaffectation', compact('affectation'));
    }
    public function update (Request $request , Affectation $affectation){
        $validatedData = $request->validate([
            'nom'=>'required',
            'type' => 'required',
            'quota_pfe' => 'required',
            'quota_im' => 'required',
            'structure_iap_id' => 'required',
        ]);
        $affectation->fill($validatedData)->save();
        return to_route('affectation.index');
    }
    public function destroy(Affectation $affectation){
        $affectation->delete();
        return to_route('affectation.index');
    }
        
}
