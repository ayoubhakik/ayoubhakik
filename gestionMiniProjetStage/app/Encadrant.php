<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encadrant extends Model
{
    /**
     * @var array $fillable
     */
    protected $fillable  = ['nom', 'prenom', 'email', 'phone', 'nbr_groupe'];


    public function departement(){
        return $this->belongsTo(Departement::class, 'id_departement', 'id');
    }
}
