<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class etudiantController extends Controller
{
    public function home(){
        if ($request->session()->has('key')) {

        return view('Etudiant/home');

        }
        return view('Etudiant/login');

    }
    public function getEtudiant(){

        $etudiants  = DB::table('etudiants')->get();

        return view('Etudiant/listEtudiant', compact('etudiants'));
    }
    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $etudiant = DB::table('users')->where('email',$email)->where('password',$password)->first();
        if($etudiant !=null){
          $value = session('key',$etudiant->name);
           return view('Etudiant/home');
        }
        else{
            return view('Etudiant/login');
        }
    }


}