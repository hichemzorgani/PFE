<?php

namespace App\Http\Controllers;

//use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\ecole;

class EcoleController extends Controller
{
    public function index()
    {
        $ecoles = (ecole::all());
        return view('/layouts/ecole',compact('ecoles'));
        
    }
    public function create()
    {
        return view('/layouts/Creation/createEcole');
    }
    public function store(Request $request){

        $nom = $request->nom;

        //validation
        $request->validate([
            'nom'=>'required'
        ]);

        //insertion
        ecole::create([
            'nom' => $nom,  
        ]);
        
        return redirect()->route('ecole.index');
    }
    public function edit (Ecole $ecole){
        return view('Layouts/modifier/editecole', compact('ecole'));
    }
    public function update (Request $request , Ecole $ecole){
        $validatedData = $request->validate([
            'nom'=>'required',
        ]);
        $ecole->fill($validatedData)->save();
        return to_route('ecole.index');
    }
    public function destroy(Ecole $ecole){
        $ecole->delete();
        return to_route('ecole.index');
    }
}
