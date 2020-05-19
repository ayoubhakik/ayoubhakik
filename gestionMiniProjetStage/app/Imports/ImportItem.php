<?php

namespace App\Imports;

use App\Item;

use Maatwebsite\Excel\Concerns\ToModel;

class ImportItem implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Item([
            'title'     => $row[0],
            'description'    => $row[1], 
        ]);
    }
}
