<?php

namespace App\Http\Controllers;

use App\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Item;
use DB;
use Excel;
use App\imports\ImportEtudiantsGtr4;
use App\imports\ImportEtudiantsGi4;
use App\imports\ImportEtudiantsGi3;


class DepartementsController extends Controller
{

    ////excel import
    public function importEtudiantExcel()
	{
        if(request('choice')==='gi3'){
            Excel::import(new ImportEtudiantsGi3, request()->file('file-5'));
            $item=DB::table('etudiants')->where('nom', 'nom')->delete();
        }
        if(request('choice')==='gi4'){
            Excel::import(new ImportEtudiantsGi4, request()->file('file-5'));
            $item=DB::table('etudiants')->where('nom', 'nom')->delete();
        }
        if(request('choice')==='gtr4'){
            Excel::import(new ImportEtudiantsGtr4, request()->file('file-5'));
            $item=DB::table('etudiants')->where('nom', 'nom')->delete();
        }
		
		return back();
    }
    
    public function importEnseignantExcel()
	{
		Excel::import(new ImportEnseignants, request()->file('file-5'));
        $item=DB::table('enseignants')->where('nom', 'nom')->delete();

		return back();
	}

    ///you can write your functions here
    public function home(){
        
    return view('Departement/home');
    }

    public function user(){
        $departement=Departement::find(1);
        return view('Departement.user',['departement'=>$departement]);
    }  



    public function editUser($id){
        $departement=Departement::find($id);
        $departement->nom=request('nom');
        $departement->prenom=request('prenom');
        $departement->telephone=request('telephone');
        $departement->email=request('email');
        $departement->status=request('status');
        $departement->description=request('description');
        $departement->save();
        return redirect('/departement/user');
    }
    public function editSocial($id){
        $departement=Departement::find($id);
        $departement->facebook=request('facebook');
        $departement->twitter=request('twitter');
        $departement->google=request('google');
        $departement->linkedin=request('linkedin');
       
        $departement->save();
        return redirect('/departement/user');
    }
    public function editPassword($id){
        $departement=Departement::find($id);
        $departement->username=request('username');
        $departement->password=request('password');
        $departement->save();
        return redirect('/departement/user');
    }
    public function storeImage($id,Request $request){
        $image = $request->imageDep;
        if($image !=null){
            $extension = $image->getClientOriginalExtension();

            if($extension === 'jpeg' || $extension === 'JPEG' || $extension === 'jpg' || $extension === 'svg' || $extension === 'png' || $extension === 'SVG' || $extension === 'PNG' ){
                Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
                $user=Departement::find($id);
                $user->image_link = $image->getFilename().'.'.$extension;
                $user->save();
                return redirect('/departement/user');

            }
            else{
                return redirect('/departement/user')->withErrors(['Invalide Format']);;

            }
            }else{
                    return redirect('/departement/user')->withErrors(['Choose a File']);;

            }
        

        


    }


    //////donot touch this functions
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
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function show(Departement $departement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function edit(Departement $departement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departement $departement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departement $departement)
    {
        //
    }
}
