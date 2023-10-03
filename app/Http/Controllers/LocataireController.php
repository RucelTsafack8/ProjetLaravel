<?php

namespace App\Http\Controllers;
/**on importe l'utilisation du models locataires */
use App\Models\locataire; 

use App\Http\Controllers\LocataireController;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LocataireController extends Controller
{
    /**fonction de section des locataires */
    public function selection_locataire(){
                
        // $select_locataire = DB::table('locataires')
        // ->select('NomPrenom', 'Email','Nom_utilisateur','Profession')
        // ->get();
        $select_locataire = locataire::all();
        if($select_locataire){
           // return view('pages/layout/page_utilisateur',compact('select_locataire'));

           return redirect('/connexion')->with('status','Echec de connexion');
        }else{
            return redirect('/connexion')->with('status','Echec de connexion');
            
        }

    }
    /**fonction  d'authentification */
    public function login(){
        return view('/connexion');
    }
    public function locataire_auth(Request $request){
        $credentials = $request->validate();


        if(Auth::attempt($credentials)){
            $request->session->regenerate();
            return redirect('/layout/page_utilisateur')->with('status','bienvenue sur ta page');
        }else{

            return redirect('/connexion')->withErrors('erreur','Echec de connexion, veuillez verifier vos identifiant et mot de passe');
        }
    }

   
    /**fonction d'insertion  des locataires*/
    public function ajouter_locataire() {
        // return view('pages.formulaire');
        return redirect('/connexion')->with('status', "Insertion reussi Veuillez vous connecter");
    }
    //controles des champs
    public function ajouter_locataire_traitement(Request $request){
        $message_motdepasse ='le mot de passe doit contenir au moins 4 caracteres';

        $request->validate([
            'NomPrenom' =>'required',
            'Email'=>'required',
            'Telephone'=>'required',
            'Nom_utilisateur'=>'required',
            'MotDePasse'=>'required',
            'Profession'=>'required',
            'Nbr_person'=>'required',
            'Date_entrer'=>'required',
            'Date_sorti'=>'required'
        ]);
        //on declare l'objet locataire a utilisee
        $locataire = new locataire;

        $locataire->NomPrenom = $request->NomPrenom;
        $locataire->Email = $request->Email;
        $locataire->Telephone = $request->Telephone;
        $locataire->Nom_utilisateur = $request->Nom_utilisateur;
        $locataire->MotDePasse = $request->MotDePasse;
        $locataire->Profession = $request->Profession;
        $locataire->Nbr_person = $request->Nbr_person;
        $locataire->Date_entrer = $request->Date_entrer;
        $locataire->Date_sorti = $request->Date_sorti;
        $locataire->save();
        /**redirection apres la reussite de l'insertion */
        return redirect('/connexion')->with('status', "Insertion reussi Veuillez vous connecter");
    }
    

}
