<?php

namespace App\Http\Controllers;
use App\Etudiant;
use App\Filiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;


class etudiantController extends Controller
{
    public function home(Request $request){
        if ($request->session()->has('etudiant')) {

         redirect::to("/etudiant/home");
         return view("Etudiant/home");

        }
        return redirect::to('/etudiant/login');

    }
    public function getEtudiant(){

        $etudiants  = DB::table('etudiants')->get();

        return redirect::to('/etudiant/listEtudiant', compact('etudiants'));
    }
    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $etudiant = DB::table('users')->where('email',$email)->where('password',$password)->first();
        $user =DB::table('etudiants')->where('id_user',$etudiant->id)->first();
        if($user !=null){
            $request->session()->put('etudiant',$user);
            return Redirect::to('/etudiant/home');
        }
        else{
            return redirect::to('/etudiant/login');
        }
    }
    public function profile($id){
         if ($request->session()->has('etudiant')) {
       $id_et = Etudiant::where('id_etudiant', $id)->get();
       foreach ($id_et as $t ) {
       	$id_f=Filiere::where('id_filiere',$t->filiere_id)->get();
       }

       return redirect::to('/etudiant/profile', compact(['id_et','id_f']));
   }
   else{
    return redirect::to('/etudiant/login');
   }

}
public function deconnecter(Request $request){
    session()->forget('etudiant');
    session()->flush();
    return Redirect::to('/etudiant/login');
}

}
