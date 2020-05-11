<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encadrant;

class encadrantController extends Controller
{        

    //Index
    public function accueil(Request $request){

        //$request->session()->put('user', $encadrant->id);
        return view('encadrantViews/accueil');

    }

    //Profile
    public function profile(){
         $encadrant = Encadrant::first();

        return view('encadrantViews/profile', ['encadrant' => $encadrant]);
    }

    //Lister Etudiants
    public function listerEtudiants(){
        return view('encadrantViews/listerEtudiants')->with(['encadrant' => $encadrant]);
    }

    

    //lister ses Groupes
    public function listerGroupes(){
        return view('encadrantViews/listerGroupes');
    }

    //Afficher un groupe
    public function afficherGrp(){
        return view('encadrantViews/afficherGrp');
    }

    //Modifier profile encadrant
    public function modifierProfile(Request $request){
        
    }
    
}
