<?php

namespace App\Exports;

use App\Models\studentData;
use Maatwebsite\Excel\Concerns\FromCollection;

class StudentDataExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return studentData::all();
    }
}
