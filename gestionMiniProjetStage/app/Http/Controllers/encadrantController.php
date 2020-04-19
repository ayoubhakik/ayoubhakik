<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encadrant;

class encadrantController extends Controller
{        
    public $encadrant = Encadrant::first();

    //Index
    public function accueil(){

        $request->session()->put('user', $encadrant->id);
        return view('encadrantViews/accueil');

    }

    //Profile
    public function profile(){
        return view('encadrantViews/profile');
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
