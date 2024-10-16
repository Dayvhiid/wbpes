<?php

namespace App\Http\Controllers;

use App\Exports\StudentDataExport;
use App\Imports\StudentDataImport;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;

class StudentData extends Controller
{
    public function export()
    {
        return Excel::download(new StudentDataExport, 'studentData.xlsx');  // Exports the file as users.xlsx
    }

    public function import()
    {
        Excel::import(new StudentDataImport, request()->file('file'));

        return redirect()->back()->with('success', 'Users Imported Successfully');
    }

}
