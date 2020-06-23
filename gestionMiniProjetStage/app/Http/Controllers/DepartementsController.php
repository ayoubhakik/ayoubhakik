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
use App\imports\ImportEnseignants;



class DepartementsController extends Controller
{
    public function listEtud(){
        $riewRow = DB::select('SELECT id_etudiant,nom,prenom,cin,cne,niveau,email,phone FROM etudiants');
        
        return view('Departement/Etudiants/list',['viewReport'=> $riewRow]);
    }

    public function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('etudiants')
        ->where('prenom', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a href="#">'.$row->prenom.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }

    public function importEtudiants(){
        $data=DB::table('etudiants')->get();
        return view('Departement/Etudiants/import',compact('data'));
    }
    public function EncadMpStat(){
       
        return view('Departement/EncadrentsMiniProjet/statistique');
    }
    
    public function listEns(){
        $riewRow = DB::select('SELECT id_encadrant,nom,prenom,email,phone FROM encadrants');
        return view('Departement/Enseignants/list',['viewReport'=> $riewRow]);
    }
    
    public function importEnseignants(){
        $data=DB::table('encadrants')->get();
        return view('Departement/Enseignants/import',compact('data'));
    }
    
    public function importEnseignantExcel(Request $request){
        if($request->file('file-5')==null){
            return back()->with('failed','choose a file.');	

        }
        else{
            $data=Excel::toCollection(new ImportEnseignants(), $request->file('file-5'));
            if(count($data) > 0){
                foreach($data->toArray() as $key=>$value){
                    foreach($value as $row){
                        if($row[0]!='nom'){
                        $insert_data[]=array(
                            'nom'=>$row[0],
                            'prenom'=>$row[1],
                            
                        );
                        }
                    }
                }
            }

        }
        if(!empty($insert_data)){
                DB::table('encadrants')->insert($insert_data);
            }
        
        return back()->with('success','Excel data imported successfully.');	
    }
    ////excel import

    public function importEtudiantExcel(Request $request)
	{
        //$this->validate($request,['file-5','required|mimes:xls,xlsx']);
        if($request->file('file-5')==null){
            return back()->with('failed','choose a file.');	

        }
        else{
        if(request('choice')==='gi3'){
            $data=Excel::toCollection(new ImportEtudiantsGi3(), $request->file('file-5'));
            if(count($data) > 0){
                foreach($data->toArray() as $key=>$value){
                    foreach($value as $row){
                        if($row[0]!='nom'){
                        $insert_data[]=array(
                            'nom'=>$row[0],
                            'prenom'=>$row[1],
                            'cin'=>$row[2],
                            'cne'=>$row[3],
                            'phone'=>'',
                            'niveau'=>'3eme',
                            'id_filiere'=>1,
                            'email'=>'',
                        );
                    }}
                }
            }

        }  
        if(request('choice')==='gi4'){
            $data=Excel::toCollection(new ImportEtudiantsGi3(), $request->file('file-5'));
            if(count($data) > 0){
                foreach($data->toArray() as $key=>$value){
                    foreach($value as $row){
                        if($row[0]!='nom'){
                        $insert_data[]=array(
                            'nom'=>$row[0],
                            'prenom'=>$row[1],
                            'cin'=>$row[2],
                            'cne'=>$row[3],
                            'phone'=>'',
                            'niveau'=>'4eme',
                            'id_filiere'=>1,
                            'email'=>'',
                        );
                    }}
                }
            }

        } 
        if(request('choice')==='gtr4'){
            $data=Excel::toCollection(new ImportEtudiantsGi3(), $request->file('file-5'));
            if(count($data) > 0){
                foreach($data->toArray() as $key=>$value){
                    foreach($value as $row){
                        if($row[0]!='nom'){
                        $insert_data[]=array(
                            'nom'=>$row[0],
                            'prenom'=>$row[1],
                            'cin'=>$row[2],
                            'cne'=>$row[3],
                            'phone'=>'',
                            'niveau'=>'4eme',
                            'id_filiere'=>2,
                            'email'=>'',
                        );
                    }}
                }
            }

        } 
            if(!empty($insert_data)){
                DB::table('etudiants')->insert($insert_data);
            }
        
        return back()->with('success','Excel data imported successfully.');	
    }

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
