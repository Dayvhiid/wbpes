<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\studentData;
use App\Models\GroupStudent;
use App\Models\Regstudent;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class AdminController extends Controller
{
    public function signup(){
        return view('admin.signup');
    }

    public function dashboard(){
        $students = Chapter::all();
        return view('admin.dashboard', compact('students'));
    }

    public function fileUpload(){
        return view('admin.fileUpload');
    }

    public function studentList(){
        $students = Regstudent::all();
        return view('admin.studentList', compact('students'));
    }


    // public function updateProjectStatus(Request $request){
    //     $request->validate([
    //         'student_id' => 'required|exists:students,id',
    //         // 'validate_status' => 'required|boolean',
    //         'status' => 'required' 
    //     ]);

    //     $student = Chapter::findOrFail($request->student_id);
    //     $student->validated_status = $request->status;
    //     $student->save();

    //     return response()->json(['success' => true, 'message' => 'Validation status updated successfully!']);
    // }


    public function updateProjectStatus(Request $request){
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'status' => 'required' 
        ]);
    
        // Use the Student model instead of Chapter
        $chapter = Chapter::findOrFail($request->student_id);
        $chapter->validated_status = "Validated";
        $chapter->save();
    
        // return response()->json(['success' => true, 'message' => 'Validation status updated successfully!']);
    }

    // public function groupList(){
    //     $students = GroupStudent::all();
    //     return view('admin.grouplist',compact('students'));
    // }


    // public function groupList()
    // {
    //     // Check if the group_students table is empty
    //     if (GroupStudent::count() === 0) {
    //         // Fetch students ordered by CGPA
    //         $students = StudentData::orderBy('cgpa', 'desc')->get();
    
    //         // Chunk students into groups of 3
    //         $chunks = $students->chunk(3);
    
    //         // Define a list of supervisors
    //         $supervisors = [
    //             'Dr Maitanmi',
    //             'Dr Mensah',
    //             // Add more supervisors as needed
    //         ];
    
    //         // Iterate through each chunk and assign groups
    //         foreach ($chunks as $key => $chunk) {
    //             $groupName = 'Group ' . ($key + 1);
    
    //             // Randomly select a supervisor for the entire group
    //             $randomSupervisor = $supervisors[array_rand($supervisors)];
    
    //             // Insert each student into the student_groups table with their group and the same supervisor
    //             foreach ($chunk as $student) {
    //                 GroupStudent::create([
    //                     'matric_no' => $student->matric_no,
    //                     'group_name' => $groupName,
    //                     'supervisor' => $randomSupervisor, // The same supervisor for the entire group
    //                 ]);
    //             }
    //         }
    //     }
    
    //     // Fetch the grouped students for the view
    //     $students = GroupStudent::all();
    
    //     // Return the view with the grouped students
    //     return view('admin.grouplist', compact('students'));
    // }

//Modifying The     Code to fetch Data from the StudentDataTable the original code will be contained above
    public function groupList()
    {
        // Check if the group_students table is empty
        if (Regstudent::count() > 1) {
            // Fetch students ordered by CGPA
            $students = Regstudent::orderBy('cgpa', 'desc')->get();
    
            // Chunk students into groups of 3
            $chunks = $students->chunk(3);
    
            // Define a list of supervisors
            $supervisors = [
                'Dr Maitanmi',
                'Dr Mensah',
                // Add more supervisors as needed
            ];
    
            // Iterate through each chunk and assign groups
            foreach ($chunks as $key => $chunk) {
                $groupName = 'Group ' . ($key + 1);
    
                // Randomly select a supervisor for the entire group
                $randomSupervisor = $supervisors[array_rand($supervisors)];
    
                // Insert each student into the student_groups table with their group and the same supervisor
                foreach ($chunk as $student) {
                    GroupStudent::create([
                        'matric_no' => $student->matricNo,
                        'group_name' => $groupName,
                        'supervisor' => $randomSupervisor, // The same supervisor for the entire group
                        'name' => $student->name,
                    ]);
                }
            }
        }
    
        // Fetch the grouped students for the view
        $students = GroupStudent::all();
    
        // Return the view with the grouped students
        return view('admin.grouplist', compact('students'));
    }

    public function exportExcel()
    {
        // Fetch all students from the database
        $students = GroupStudent::all();

        // Create a new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set the header row
        $sheet->setCellValue('B1', 'Group');
        $sheet->setCellValue('C1', 'Matric Number');
        $sheet->setCellValue('D1', 'Supervisor');
        $sheet->setCellValue('E1', 'Name');

        // Populate the spreadsheet with student data
        $row = 2; // Start from the second row
        foreach ($students as $student) {
            $sheet->setCellValue('B' . $row, $student->group_name);
            $sheet->setCellValue('C' . $row, $student->matric_no);
            $sheet->setCellValue('D' . $row, $student->supervisor);
            $sheet->setCellValue('E' . $row, $student->name);
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
