<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\universite;

class UniversiteController extends Controller
{
    public function index()
    {
        $universites = (universite::all());
        return view('/layouts/universite',compact('universites'));
        
    }
    public function create()
    {
        return view('/layouts/Creation/createUniversite');
    }
    public function store(Request $request){

        $nom = $request->nom;
        $wilaya = $request->wilaya;

        //validation
        $request->validate([
            'nom'=>'required'
        ]);

        //insertion
        universite::create([
            'nom' => $nom,
            'wilaya' => $wilaya,   
        ]);
        
        return redirect()->route('universite.index');
    }
    public function edit (Universite $universite){
        return view('Layouts/modifier/editUniversite', compact('universite'));

    }
    public function update (Request $request , Universite $universite){
        $validatedData = $request->validate([
            'nom' => 'required',
        ]);
        $universite->fill($validatedData)->save();
        return to_route('universite.index');
    }
        
    
}
