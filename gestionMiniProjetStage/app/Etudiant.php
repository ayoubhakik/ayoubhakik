<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //
    protected $fillable = ['nom', 'prenom','cin','cne','phone','email'];


    public function filiere(){
        return $this->belongsTo(Filiere::class, 'id_filiere', 'id_filiere');
    }
}
