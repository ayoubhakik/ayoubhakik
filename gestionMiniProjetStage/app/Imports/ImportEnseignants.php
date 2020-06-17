<?php

namespace App\Imports;

use App\Enseignant;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportEnseignants implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Enseignant([
            //
            'nom'     => $row[0],
            'prenom'     => $row[1],
        ]);
    }
}
