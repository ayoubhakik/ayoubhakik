<?php

namespace App\Imports;

use App\Etudiant;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportEtudiantsGi4 implements ToModel
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
            'niveau'    => '4eme',
            'id_filiere' =>1,


        ]);
    }
}
