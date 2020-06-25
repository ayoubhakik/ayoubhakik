<?php

namespace App\Http\Controllers;
use App\Etudiant;
use App\Filiere;
use Illuminate\Http\Request;
use DB;


class etudiantController extends Controller
{
    public function home(Request $request){
        if ($request->session()->has('etudiant')) {

        return redirect('/etudiant/home');

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
        $user =DB::table('etudiants')->where('id_user',$etudiant->id)->first();
        if($user !=null){
          $request->session()->put('etudiant',$user);
            return view('Etudiant/home');
        }
        else{
            return view('Etudiant/login');
        }
    }
    public function profile($id){
       $id_et = Etudiant::where('id_etudiant', $id)->get();
       foreach ($id_et as $t ) {
       	$id_f=Filiere::where('id_filiere',$t->filiere_id)->get();
       }

       return view('Etudiant/profile', compact(['id_et','id_f']));

}
public function deconnecter(Request $request){
    $request->session()->forget('etudiant');
    return Redirect::to("/etudiant/login");
}

}
