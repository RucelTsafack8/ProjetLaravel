<?php

namespace App\Http\Controllers;
/**on importe l'utilisation du model administarteurs */
use App\Http\Controllers\AdministarteurController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\administrateur; 
use Illuminate\Http\Request;
/**importe le model locatire pour pouvoir modifier les information des locatires */
use App\Models\locataire; 

class AdministrateurController extends Controller
{
    /**selection des Administrateur */
    public function selection_admin(){
        
    }
    /**insertion des administrateur */
    public function ajouter_administrateur(){
        return view('admin.inscriptionadmin');
    }
    /**insertion admin avec contrainte */
    public function ajouter_administrateur_traitement(Request $request){

        $request->validate([
            'NomPrenom' =>'required',
            'Email'=>'required',
            'Telephone'=>'required',
            'Profession'=>'required',
        ]);
        $administrateur = new administrateur;
        
        $administrateur->NomPrenom = $request->NomPrenom;
        $administrateur->Email = $request->Email;
        $administrateur->Telephone = $request->Telephone;
        $administrateur->Profession = $request->Profession;
        $administrateur->save();
        return redirect('/admin/compte')->with('status','Insertion reussi veiller configurer votre compte');
    }
    /**authentification des administrateur */
    public function admin_auth(){

    }
    /**fonction de supression des locataires */
    public function suprimer_locataire($id){
        $locataire = locataire::find($id);
        $locataire->delete();
        return redirect('/liste_locataires')->with('status','le locataire a bien ete suprimmer de la base de donnees');
    }
}
