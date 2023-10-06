<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocataireController extends Controller
{
    //
    protected function login(){
        return view ('/connexion');
    }

    protected function auth( Loginrequest $request){
        $credentials = $request([
            'MotDePasse'=>'required'
        ]);

        if(Auth::attempt($credentials)){
            return redirect('/layout/page_utilisateur')->with('status','connexion reussi');
        }

        return back();
        return redirect('/connexion')->with('erreur','identifiant et mot de passe incorrect');
    }


}
