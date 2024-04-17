<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\compte;
use App\Models\ecole;
use Illuminate\Support\Facades\Hash;

class CompteController extends Controller
{
    public function index()
    {
        $comptes = compte::all();
        $ecoles = ecole::all();
        return view('/layouts/compte',compact('comptes'),compact('ecoles'));
    }
    
    /*public function create()
    {
        return view('/layouts/Creation/create');
    }*/

    public function store(Request $request)
    {
        $ecoles = (ecole::all());

        $utilisateur = $request->utilisateur;
        $password = $request->password;
        $passwordh = $request->password;
        $type_compte = $request->type_compte;
        $nom_ecole = $request->nom_ecole;

        foreach ($ecoles as $ecole)
        {
            if ($ecole->nom == $nom_ecole)
            {
                $structure_iap_id = $ecole->id;
            }
        }
        
        //validation
        $formFields = $request->validate([
            'utilisateur' => 'required',
            'password' => 'required',
            'type_compte' => 'required',
           // 'structure_iap_id' => 'required',
        ]);

        //Hash
        $password = $request->password;
       // $formFields['password'] = Hash::make($password);
        $passwordhh = Hash::make($password);
        

        //insertion
        compte::create([
            'utilisateur' => $utilisateur,
            'password' => $passwordhh,
            'passwordh' => $passwordh,
            'type_compte' => $type_compte,
            'structure_iap_id' => $structure_iap_id,
        ]);

        
            
        

       return redirect()->route('compte.index');
    }
    public function edit (Compte $compte){
        $ecoles = ecole::all();
        $comptes = compte::all();
        return view('/layouts/compte',compact('comptes', 'ecoles', 'compte'));
    }
    public function update (Request $request , Compte $compte){
        $validatedData = $request->validate([
            'utilisateur' => 'required',
            'password' => 'required',
            'type_compte' => 'required',
            'structure_iap_id' => 'required',   
        ]);
        $compte->fill($validatedData)->save();
        return to_route('compte.index');
    }
    public function destroy(Compte $compte){
        $compte->delete();
        return to_route('compte.index');
    }

}
