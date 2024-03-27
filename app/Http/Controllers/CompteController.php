<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\compte;
use Illuminate\Support\Facades\Hash;

class CompteController extends Controller
{
    public function index()
    {
        $comptes = compte::all();
        return view('/layouts/compte',compact('comptes'));
    }
    
    public function create()
    {
        return view('/layouts/Creation/create');
    }

    public function store(Request $request)
    {
        $utilisateur = $request->utilisateur;
        $password = $request->password;
        $type_compte = $request->type_compte;
        $structure_iap_id = $request->structure_iap_id;
        
        //validation
        $formFields = $request->validate([
            'utilisateur' => 'required',
            'password' => 'required',
            'type_compte' => 'required',
            'structure_iap_id' => 'required',
        ]);

        //Hash
        $password = $request->password;
        $formFields['password'] = Hash::make($password);
        

        //insertion
        compte::create($formFields);
           // 'utilisateur' => $utilisateur,
           // 'password' => $password,
          //  'type_compte' => $type_compte,
          //  'structure_iap_id' => $structure_iap_id,
        

       return redirect()->route('compte.index');
    }
    public function edit (Compte $compte){
        return view('Layouts/modifier/editcompte', compact('compte'));
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

}
