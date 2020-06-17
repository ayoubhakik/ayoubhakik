<?php

namespace App\Imports;

use App\Encadrants;
use Maatwebsite\Excel\Concerns\ToModel;

class EnseignantsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Encadrants([
            //
        ]);
    }
}
