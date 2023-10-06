<?php

namespace App\Http\Controllers;
/**on importe l'utilisation du models locataires */
use App\Models\locataire; 

use App\Http\Controllers\LocataireController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LocataireController extends Controller
{

    public function login(Request $request){
        if($request->session()->get('locataire')){
            return redirect('/layout/user_page')->with('erreur',"vous devez dabord vous deconnecter avant de vous reconnecter");
        }
        return view('/connexion');
    }
    public function locataire_auth(Request $request){
        
        $request->validate([
            'Email'=>'required',
            'MotDePasse'=>'required'
        ]);
        $locataire  = locataire::where('Email',$request->input('Email'))->first();
        
        if($locataire){
           if(Hash::check($request->input('MotDePasse'),$locataire->MotDePasse)){
                $request->session()->put('locataire',$locataire);
               return redirect('/layout/user_page')->with('status',"bienvenue sur ta page utilisateur");
           }else{
                return back()->with('erreur','Identifiant ou Mot de passe incorrect');
           }

        }else{
            return redirect('/connexion')->with('erreur','Desole vous avez pas encore de compte veuillez vous enregistrer');
        }
    }





    /**fonction de section des locataires */
    public function selection_locataire(){
                
        // $select_locataire = DB::table('locataires')
        // ->select('NomPrenom', 'Email','Nom_utilisateur','Profession')
        // ->get();
        $locataires = locataire::all();
        if($locataires){
           // return view('pages/layout/page_utilisateur',compact('select_locataire'));
           return view('admin.liste_locataires',compact('locataires'));
        }else{
            return redirect('/connexion')->with('erreur','Echec de connexion');
            
        }

    }
    /**fonction  d'authentification */
  
   
    /**fonction d'insertion  des locataires*/
    public function ajouter_locataire() { 
        if($request->session()->get('locataire')){
            return redirect('/layout/user_page')->with('erreur',"vous devez dabord vous deconnecter avant de vous reinscrire");
        }
        return view('pages.formulaire');
        
    }
    //controles des champs
    public function ajouter_locataire_traitement(Request $request){

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
        $locataire->MotDePasse = Hash::make($request->MotDePasse);
        $locataire->Profession = $request->Profession;
        $locataire->Nbr_person = $request->Nbr_person;
        $locataire->Date_entrer = $request->Date_entrer;
        $locataire->Date_sorti = $request->Date_sorti;
        $locataire->save();
        /**redirection apres la reussite de l'insertion */
        return redirect('/connexion')->with('status', "Insertion reussi Veuillez vous connecter");
    }
    
    public function logout(){
        return view('/connexion');
    }

    public function logout_locataire(Request $request){
        $request->session()->forget('locataire');
        return redirect('/home')->with('status','vous venez de vous deconnecter!!!');
    }

}
