<?php

namespace App\Imports;

use App\Disneyplus;
use Maatwebsite\Excel\Concerns\ToModel;

class DisneyplusImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Disneyplus([
            'show_name' => $row[0],
            'series' => $row[1],
            'lead_actor' => $row[2],
            'created_at' => $row[3],
            'updated_at' => $row[4],
        ]);
    }
}
