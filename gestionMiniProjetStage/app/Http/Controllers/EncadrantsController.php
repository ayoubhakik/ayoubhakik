<?php

namespace App\Http\Controllers;

use App\Departement;
use App\Encadrant;
use Illuminate\Http\Request;
use DB;

class EncadrantsController extends Controller
{
    public function index(){
        $encadrants = Encadrant::all();
        return view('Departement/EncadrentsMiniProjet/list')->with('encadrants', $encadrants);
    }

    public function add(){
        return view('Departement/EncadrentsMiniProjet/add')->with('departements', Departement::all())->with('encadrant', null);
    }

    public function edit(Request $request, $id){
        $encadrant = Encadrant::all()->where('id_encadrant', $id)->first();
        return view('Departement/EncadrentsMiniProjet/add')->with('departements', Departement::all())
            ->with('encadrant', $encadrant);
    }

    public function saveEncadrant(Request $request){

        DB::table('encadrants')->where(['id_encadrant'=> $request->input('id')])->update(
            [
                'nom' => $request->input('nom'),
                'prenom' => $request->input('prenom'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'nbr_groupe' => $request->input('nbr_groupe'),
                'id_departement' => $request->input('departement')
            ]
        );

        return back();
    }

    public function addEncadrant(Request $request){
        $encadrant = new Encadrant();
        $encadrant->nom = $request->input('nom');
        $encadrant->prenom = $request->input('prenom');
        $encadrant->email = $request->input('email');
        $encadrant->phone = $request->input('phone');
        $encadrant->nbr_groupe = $request->input('nbr_groupe');
        $encadrant->id_departement = $request->input('departement');

        $encadrant->save();

        return back();
    }

    public function delete(Request $request, $id){
        DB::table('encadrants')->where(['id_encadrant'=>$id])->delete();
        return back();
    }
}
