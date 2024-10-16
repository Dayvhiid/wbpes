<?php

namespace App\Imports;

use App\Models\studentData;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentDataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new studentData([
            //
            'name' => $row[0],
            'matric_no' => $row[1],
            'department' => $row[2],
            'cgpa' => $row[3],
            'phone_number' => $row[4]
        ]);
    }
}
