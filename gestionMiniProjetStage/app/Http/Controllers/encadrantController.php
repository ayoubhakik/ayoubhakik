<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class encadrantController extends Controller
{
    //Index
    public function accueil(){
        return view('encadrantViews/accueil');
    }

    //Profile
    public function profile(){
        return view('encadrantViews/profile');
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
    public function afficherGrp(){
        return view('encadrantViews/afficherGrp');
    }
    
}
