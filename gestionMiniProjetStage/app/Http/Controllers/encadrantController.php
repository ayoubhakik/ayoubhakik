<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encadrant;
use App\Groupe;
use App\Departement;
use App\Etudiant;
use App\Soutenance;

class encadrantController extends Controller
{        

    //Index
    public function accueil(Request $request){
        $request->session()->put('userID', 2);
        $idEncadrant = $request->session()->get('userID');
        $encadrant = Encadrant::where('id_encadrant', $idEncadrant)->first();
        return view('encadrantViews/accueil', ['encadrant' => $encadrant]);

    }

    //Profile
    public function profile(Request $request){
        $idEncadrant = $request->session()->get('userID');
        $encadrant = Encadrant::where('id_encadrant', $idEncadrant)->first();
        $departements = Departement::all()->pluck('nom_departement','id_departement');
        $path = explode("/",$encadrant->lien_image);
        return view('encadrantViews/profile', ['encadrant' => $encadrant, 'departements' => $departements, 'path' => $path[2]]);
    }

    //Lister Etudiants
    public function listerEtudiants(){
        return view('encadrantViews/listerEtudiants');
    }

    

    //lister ses Groupes
    public function listerGroupes(){
        return view('encadrantViews/listerGroupes');
    }

    //Afficher un groupe
    public function afficherGrp(Request $request){

        $groupe = Groupe::where('id_groupe', $request['id_groupe'])->first();
        $membres = Etudiant::where('id_groupe', $groupe->id_groupe)->select('nom', 'prenom', 'img_link')->get();
        $soutenance = Soutenance::where('id_soutenance', $groupe->id_soutenance)->first();
        $jury = Encadrant::wherein('id_encadrant',[$soutenance->id_jurie1, $soutenance->id_jurie2, $soutenance->id_jurie3])->select('nom', 'prenom')->get();
        return view('encadrantViews/afficherGrp', ['groupe' => $groupe, 'membres' => $membres, 'jury' => $jury, 'soutenance' => $soutenance]);
    }

    //Modifier profile encadrant
    public function modifierProfile(Request $request){
        $encadrant = Encadrant::where('id_encadrant', $request['id_encadrant'])->first();
        $encadrant->nom = $request['nom'];
        $encadrant->prenom = $request['prenom'];
        if($request['lien_image'] != null){
            $path = $request->file('lien_image')->store('public/avatars');
            $encadrant->lien_image = $path;
        }
        $encadrant->email = $request['email'];
        $encadrant->phone = $request['phone'];
        $encadrant->id_departement = $request['id_departement'];
        $encadrant->save();
        
        return redirect()->action('encadrantController@profile');
    }
    //l'encadrant évalue le groupe
    public function evaluer(Request $request){
        $groupe = Groupe::where('id_groupe', $request['id_groupe'])->first();
        $groupe->note = $request['note'];
        $groupe->appreciation = $request['appreciation'];
        $groupe->save();
    
        return redirect()->action('encadrantController@afficherGrp', ['id_groupe' => $request['id_groupe']]);
    }
    
}
