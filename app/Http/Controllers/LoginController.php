<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
       return view('welcome');
    }
    public function login(Request $request)
    {
      $utilisateur = $request->utilisateur;
      $password = $request->password;
      $type_compte = $request->type_compte;
      $credentials = ['utilisateur' => $utilisateur , "password" => $password , 'type_compte' => $type_compte];
      
      if((Auth::attempt($credentials))){

        // utilisateur et mot de passe valide

        //$request->session()->regenerate();

        if($type_compte == 1){

          return to_route('statistique.index')->with('success','vous étes bien connecté'.$utilisateur." .");

        }else if($type_compte == 2){

          return to_route('statistique2.index')->with('success','vous étes bien connecté'.$utilisateur." .");

        }else if($type_compte == 3){

          return to_route('consulterstage.index')->with('success','vous étes bien connecté'.$utilisateur." .");

        }

        
      }else{

        // utilisateur ou mot de passe invalide

        return back()->withErrors([
          'utilisateur'=> 'utilisateur ou mot de passe incorrect.'
        ]);

      }
    }
}
