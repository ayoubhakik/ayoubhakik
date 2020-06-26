<?php

namespace App\Http\Controllers;
use App\Etudiant;
use App\Filiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

use File;
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
        $etudiant1=DB::table('etudiants')->where('id_etudiant',session()->get('etudiant'))->first();
        $etudiants  = DB::table('etudiants')->where('id_filiere',$etudiant1->id_filiere)->get();
        return view('/etudiant/listEtudiant', compact('etudiants'));
    }
    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $etudiant = DB::table('users')->where('email',$email)->where('password',$password)->first();
        $user =DB::table('etudiants')->where('id_user',$etudiant->id)->first();
        if($user !=null){
            $request->session()->put('etudiant',$user->id_etudiant);
            return Redirect::to('/etudiant/home');
        }
        else{
            return redirect::to('/etudiant/login');
        }
    }
    public function profile(Request $request){
        if ($request->session()->has('etudiant')) {
        $id =$request->session()->get('etudiant');
       $id_et = Etudiant::where('id_etudiant',$id)->get();



       foreach ($id_et as $t ) {
        $path = explode("/",$t->img_link);
       	$id_f=Filiere::where('id_filiere',$t->id_filiere)->get();
       }

       return view('/etudiant/profile', compact(['id_et','id_f','path']));
}
   else{
    return redirect::to('/etudiant/login');
   }

}
public function deconnecter(Request $request){
    session()->flush();
    session()->forget('etudiant');
    return Redirect::to('/etudiant/login');
}
    public function modifierProfile(Request $request){
     if ($request->session()->has('etudiant')) {
        $id =$request->session()->get('etudiant');
        $etudiant = Etudiant::where('id_etudiant',$id)->first();
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->email = $request->input('email');
        $etudiant->phone = $request->input('phone');
      $etudiant->id_filiere = $request['id_filiere'];
        $etudiant->save();
        return redirect()->action('etudiantController@profile');
    }

 else{
    return redirect::to('/etudiant/login');
   }
}
 public function storeImage(Request $request){
       $image = $request->img_link;
        if($image !=null){
            $extension = $image->getClientOriginalExtension();

            if($extension === 'jpeg' || $extension === 'JPEG' || $extension === 'jpg' || $extension === 'svg' || $extension === 'png' || $extension === 'SVG' || $extension === 'PNG' ){
                \Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
                 $id =$request->session()->get('etudiant');
                $user=Etudiant::find($id);
                $user->img_link = $image->getFilename().'.'.$extension;
                $user->save();
                return redirect('/etudiant/profile');

            }
            else{
                return redirect('/etudiant/profile#popup1')->withErrors(['Invalide Format']);;

            }
            }else{
                    return redirect('/etudiant/profile#popup1')->withErrors(['Choose a File']);;

            }
        }
public function sendInvit(Request $request){

}

}
