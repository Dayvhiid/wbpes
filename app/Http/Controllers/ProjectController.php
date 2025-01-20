<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Student;
use Illuminate\Http\Request;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectController extends Controller
{
    //
    public function index(){
        return view('student.chapter');
    }

    public function store(Request $request){
        //  $student = new Student();
        //  $student->due_date = $request->input('due_date');
        //  $student->chapter_name = $request->input('chapter_name');
        //  $student->file_path = $request->input('file');
        //  $student->save();

        $matricNo = session('matric_no');

        // Create a new instance of Project
            $student = new Chapter();

            // Set the properties of the new Project instance
            $student->due_date = $request->input('due_date');
            $student->chapter_name = $request->input('chapter_name');
            $student->fullname = $request->input('fullname');
            $student->file_path = $request->file('file');
            $student->matric_no = session('matric_no'); // Assuming you want to set the matric_no from the session
            // $student->project_supervisor = session('project_supervisor');
            $student->project_supervisor = $request->input('project_supervisor');

            if($request->hasFile('file')){
                $file = $request->file('file')->store('public');
                // $file = Storage::disk('local')->put('/',$request->file('file'));
                $pathInfo = pathinfo($file);

                // Extract the filename from the path information
                $storedFilename = $pathInfo['basename'];
                $student->file_name = $storedFilename;
                // dd($storedFilename);
            }

        
         

            // Save the new Project instance to the database
            if ($student->save()) {
                // Return a success response
                return redirect(route('student.projectList'));
                return response()->json(['message' => 'Student record created successfully.']);
            } else {
                // Handle the case when the record could not be saved
                return response()->json(['error' => 'Failed to create student record.'], 500);
            }

    }

    public function projectList(Chapter $chapter){
        $chapter = Chapter::where('matric_no', session('matric_no'))->get();


         $chaptering = Chapter::find('matric_no');

    // Check if the methodology evaluation is null or empty
    if ($chaptering && (is_null($chaptering->feedback))) {
        // If empty or null, show "under review" message
        notify()->success('Your Project is under review');
    } else {
        // If not empty, show "approved" message
        notify()->success('Project has been approved');
    }
        // notify()->success('Your Project Has Been Approved');
        return view('projects.projectList', ['chapter' => $chapter]);
    }

    public function delete($chapter){
        $rw = Chapter::find($chapter);
        $rw->delete();
        return redirect(route('student.projectList'));
      
    }  
       // public function projectList($chapter){
    //     // Assuming 'chapter' is the name of a column in your Chapter model
    //     $chapters = Chapter::where('matric_no', session('matric_no'))
    //                        ->where('chapter_name', $chapter)
    //                        ->get();
    
    //     return view('projects.projectList', ['chapters' => $chapters]);
    // }
}
