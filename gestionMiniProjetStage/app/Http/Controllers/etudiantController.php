<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class etudiantController extends Controller
{
    public function home(){

        return view('Etudiant/home');


    }
    public function getEtudiant(){

        $etudiants  = DB::table('etudiants')->get();

        return view('Etudiant/listEtudiant', compact('etudiants'));
    }


}
