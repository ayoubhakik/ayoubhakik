<?php

namespace App\Http\Controllers;

use App\Config;
use App\Departement;
use Illuminate\Http\Request;
class SettingsController extends Controller
{
    public function index(){

        $configs = Config::all();
        $departements = Departement::all();

        return view('Departement.setting')->with('configs', $configs)->with('departements', $departements);
    }


    public function addConfig(Request $request){

        $config = new Config();
        $config->nb_apres_delais = $request->input('nb_apres_delais');
        $config->nb_min = $request->input('nb_min');
        $config->nb_max = $request->input('nb_max');
        $config->date_limit = $request->input('date_limit');
        $config->departements_id = $request->input('departement');

        $config->save();

        return back();
    }

    public function deleteConfig(Request $request, $id){
        $config = Config::all()->find($id);
        $config->delete();
        return back();
    }

}
