<?php
namespace App\Http\Controllers;

use App\Models\GroupStudent;
use App\Models\StudentData;
use App\Models\StudentGroup;
use Illuminate\Http\Request;

class StudentGroupController extends Controller
{
    public function groupStudents()
    {
        // Fetch students ordered by CGPA
        $students = StudentData::orderBy('cgpa', 'desc')->get();

        // Chunk students into groups of 3
        $chunks = $students->chunk(3);

        foreach ($chunks as $key => $chunk) {
            $groupName = 'Group ' . ($key + 1);

            foreach ($chunk as $student) {
                // Insert each student into the student_groups table with their group
                GroupStudent::create([
                    'matric_no' => $student->matric_no,
                    'group_name' => $groupName
                ]);
            }
        }

        return response()->json(['message' => 'Students grouped successfully!']);
    }
}

