<?php

namespace App\Imports;

use App\Health;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ChildImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Health([
            'id' => $row['id'],
            'zone' => $row['zone'],
            'mothersname' => $row['mothersname'],
            'childsname' => $row['childsname'],
            'ind_id' => $row['ind_id'],
            'sex_id' => $row['sex_id'],
            'birthdate' => $row['birthdate'],
            'actualdate' => $row['actualdate'],
            'weight' => $row['weight'],
            'height' => $row['height'],
            'ageinmonths' => $row['ageinmonths'],
            'weightst' => $row['weightst'],
            'heightst' => $row['heightst'],
            'weightforlengthst' => $row['weightforlengthst'],
        ]);
    }
}
