<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdministrateurController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UtilisateurController extends Controller
{
    /**
     * insertion des donnees dans la base user
     */
    public function insert_admin(){
        return view('admin.compte');
    }

    public function insert_admin_traitement(Request $request){
        $request->validate([
            'Email'=>'required',
            'Nom_utilisateur'=>'required',
            'MotDePasse'=>'required',

        ]);

        $admin = new User;
       
        $admin->Nom_utlisateur = $request->Nom_utlisateur;
        $admin->email = $request->email;
        $admin->MotDePasse  = $request->MotDePasse;
        $admin->save();
        return redirect('/admin/connexion')->with('status','Configuration reussi , veiller vous connecter');
    }

    public function login(){
        return view('/admin/connexion');
    }
    public function admin_auth(Request $request){
        

        $request->validate([
            'Email'=>'required',
            'MotDePasse'=>'required'
        ]);
        $admin  = User::where('Email',$request->input('Email'))->first();
        
        if($admin){
           if(Hash::check($request->input('MotDePasse'),$admin->MotDePasse)){
                $request->session()->put('User',$admin);
               return redirect('/layout/user_page')->with('status',"bienvenue sur ta page utilisateur");
           }else{
                return back()->with('erreur','Identifiant ou Mot de passe incorrect');
           }

        }else{
            return redirect('/admin/connexion')->with('erreur','Desole vous avez pas encore de compte veuillez vous enregistrer');
        }
    }

}
