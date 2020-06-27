<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    /**
     * @var array $fillable
     */
    protected $fillable = ['nb_apres_delais', 'nb_min', 'nb_max', 'date_limit'];


    public function departement(){
        return $this->belongsTo(Departement::class, 'departements_id', 'id');
    }
}
