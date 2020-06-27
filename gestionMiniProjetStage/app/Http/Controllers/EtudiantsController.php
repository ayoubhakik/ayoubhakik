<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\Filiere;
use Illuminate\Http\Request;

class EtudiantsController extends Controller
{
    public function filter(){
        $data = Etudiant::all();
        $filieres = Filiere::all();
        return view('Departement/Etudiants/import',compact('data'))->with('filieres', $filieres);
    }
}
