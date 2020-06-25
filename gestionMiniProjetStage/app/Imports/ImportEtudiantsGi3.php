<?php

namespace App\Imports;

use App\Etudiant;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportEtudiantsGi3 implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Etudiant([
            //
            'nom'     => $row[0],
            'prenom'     => $row[1],
            'cin'     => $row[2],
            'cne'     => $row[3],
            'phone'     => '',
            'email'     => '',
            'niveau'    => '3eme',
            'id_filiere' =>1,

        ]);
    }
}
