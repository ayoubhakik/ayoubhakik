<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //
    protected $primaryKey = 'id_etudiant';
    protected $fillable = ['nom', 'prenom','cin','cne','phone','email','img_link'];
}
