<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{

 
    public function chef(){
        return $this->hasMany(Etudiant::class,'id_groupe','id_groupe')->where('etat','<>',null);
    }
    public function etudians(){
        return $this->hasMany(Etudiant::class,'id_groupe','id_groupe');
    }

    public function encadrent(){
        return $this->belongsTo(Encadrant::class,'id_encadrant','id_encadrant');

    }
}