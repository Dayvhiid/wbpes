<?php
namespace App\Http\Controllers;

use App\Models\GroupStudent;
use App\Models\StudentData;
use App\Models\StudentGroup;
use Illuminate\Http\Request;

class StudentGroupController extends Controller
{
    // public function groupStudents()
    // {
    //     // Fetch students ordered by CGPA
    //     $students = StudentData::orderBy('cgpa', 'desc')->get();

    //     // Chunk students into groups of 3
    //     $chunks = $students->chunk(3);

    //     foreach ($chunks as $key => $chunk) {
    //         $groupName = 'Group ' . ($key + 1);

    //         foreach ($chunk as $student) {
    //             // Insert each student into the student_groups table with their group
    //             GroupStudent::create([
    //                 'matric_no' => $student->matric_no,
    //                 'group_name' => $groupName
    //             ]);
    //         }
    //     }

    //     return response()->json(['message' => 'Students grouped successfully!']);
    // }

    
    public function groupStudents()
    {
        // Fetch students ordered by CGPA
        $students = StudentData::orderBy('cgpa', 'desc')->get();
    
        // Chunk students into groups of 3
        $chunks = $students->chunk(3);
    
        // Define a list of supervisors
        $supervisors = [
            'Dr Maitanmi',
            'Dr Mensah',
            // 'Dr Adegboola',
            // 'Prof Oyenkachi',
            // 'Mrs S. Susan'
        ];
    
        foreach ($chunks as $key => $chunk) {
            $groupName = 'Group ' . ($key + 1);
    
            // Randomly select a supervisor for the entire group
            $randomSupervisor = $supervisors[array_rand($supervisors)];
    
            foreach ($chunk as $student) {
                // Insert each student into the student_groups table with their group and the same supervisor
                GroupStudent::create([
                    'name' => $student->name,
                    'matric_no' => $student->matric_no,
                    'group_name' => $groupName,
                    'supervisor' => $randomSupervisor, // The same supervisor for the entire group
                ]);
            }
        }
    
        // return response()->json(['message' => 'Students grouped successfully!']);
        return redirect(route('status.status'))->with('msg','Students Grouped Succesfully');
    }
    

}

