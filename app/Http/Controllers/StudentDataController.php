<?php

namespace App\Http\Controllers;

use App\Exports\StudentDataExport;
use App\Imports\StudentDataImport;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StudentsExport;


class StudentDataController extends Controller

{
    public function index(){
        return view('supervisor.testing');
    }
    public function export()
    {
        return Excel::download(new StudentDataExport, 'studentData.xlsx');  // Exports the file as users.xlsx
    }

    public function import()
    {
        Excel::import(new StudentDataImport, request()->file('file'));
        return redirect(route('status.status'))->with('msg', 'Student Database Imported Succesfully');


        // return redirect()->back()->with('success', 'Users Imported Successfully');
    }




}