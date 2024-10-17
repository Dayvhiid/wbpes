<?php

namespace App\Http\Controllers;

use App\Models\studentData;
use App\Models\GroupStudent;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class AdminController extends Controller
{
    public function signup(){
        return view('admin.signup');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function fileUpload(){
        return view('admin.fileUpload');
    }

    public function studentList(){
        $students = studentData::all();
        return view('admin.studentList', compact('students'));
    }

    public function groupList(){
        $students = GroupStudent::all();
        return view('admin.grouplist',compact('students'));
    }

    public function exportExcel()
    {
        // Fetch all students from the database
        $students = GroupStudent::all();

        // Create a new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set the header row
        $sheet->setCellValue('A1', 'Group');
        $sheet->setCellValue('B1', 'Matric Number');
        $sheet->setCellValue('C1', 'Supervisor');

        // Populate the spreadsheet with student data
        $row = 2; // Start from the second row
        foreach ($students as $student) {
            $sheet->setCellValue('A' . $row, $student->group_name);
            $sheet->setCellValue('B' . $row, $student->matric_no);
            $sheet->setCellValue('C' . $row, $student->supervisor);
            $row++;
        }

        // Set the header for download
        $writer = new Xlsx($spreadsheet);
        $filename = 'students.xlsx';

        // Send the file to the browser for download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        // Write the file to the output
        $writer->save('php://output');
        exit;
    }

}
