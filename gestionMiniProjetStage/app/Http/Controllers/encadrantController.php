<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Etudiant;
use App\Groupes;

class encadrantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

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
        $students = DB::table('etudiants')->get();
        return view('encadrantViews/listerEtudiants')->with('students', $students);
    }

    //lister ses Groupes
    public function listerGroupes(){
        return view('encadrantViews/listerGroupes');
    }

    //Afficher un groupe
    public function afficherGrp(){
        $groupes = DB::table('groupes')->get();
        return view('encadrantViews/afficherGrp')->with('groupes', $groupes);
    }
}
