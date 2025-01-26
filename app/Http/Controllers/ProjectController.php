<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Deadline;
use App\Models\Student;
use Illuminate\Support\Carbon;
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

    // public function store(Request $request){
    //     //  $student = new Student();
    //     //  $student->due_date = $request->input('due_date');
    //     //  $student->chapter_name = $request->input('chapter_name');
    //     //  $student->file_path = $request->input('file');
    //     //  $student->save();

    //     $matricNo = session('matric_no');

    //     // Create a new instance of Project
    //         $student = new Chapter();

    //         // Set the properties of the new Project instance
    //         $student->due_date = $request->input('due_date');
    //         $student->chapter_name = $request->input('chapter_name');
    //         $student->fullname = $request->input('fullname');
    //         $student->file_path = $request->file('file');
    //         $student->matric_no = session('matric_no'); // Assuming you want to set the matric_no from the session
    //         // $student->project_supervisor = session('project_supervisor');
    //         $student->project_supervisor = $request->input('project_supervisor');

    //         if($request->hasFile('file')){
    //             $file = $request->file('file')->store('public');
    //             // $file = Storage::disk('local')->put('/',$request->file('file'));
    //             $pathInfo = pathinfo($file);

    //             // Extract the filename from the path information
    //             $storedFilename = $pathInfo['basename'];
    //             $student->file_name = $storedFilename;
    //             // dd($storedFilename);
    //         }

    //         $currentDateTime = Carbon::now();
    //         $deadline = Deadline::where('chapter_name', $student->chapter_name)
    //         ->where('supervisor_name', $student->project_supervisor);
    //         if ($currentDateTime->greaterThan($deadline->due_date)){
    //             notify()->success('The deadline for the expected chapter has passed');
    //             return view('student.chapter');
    //         }
    //         $student->save();

        
         

    //         // Save the new Project instance to the database
    //         if ($student->save()) {
    //             // Return a success response
    //             $chapter = Chapter::where('matric_no', session('matric_no'))->get();
    //             notify()->success('Your Project has been submitted succefully');
    //             return view('projects.projectList',['chapter' => $chapter]);
    //             // return redirect(route('student.projectList'));
    //             return response()->json(['message' => 'Student record created successfully.']);
    //         } else {
    //             // Handle the case when the record could not be saved
    //             return response()->json(['error' => 'Failed to create student record.'], 500);
    //         }

    // }


    public function store(Request $request)
{
    $matricNo = session('matric_no');

    // Validate the incoming request
    $request->validate([
        'due_date' => 'required|date',
        'chapter_name' => 'required|string|max:255',
        'fullname' => 'required|string|max:255',
        'file' => 'required|file|mimes:pdf,doc,docx|max:2048', // Restrict file types and size
        'project_supervisor' => 'required|string|max:255',
    ]);

    // Create a new instance of Chapter
    $chapter = new Chapter();

    // Set the properties of the new Chapter instance
    $chapter->due_date = $request->input('due_date');
    $chapter->chapter_name = $request->input('chapter_name');
    $chapter->fullname = $request->input('fullname');
    $chapter->matric_no = $matricNo;
    $chapter->project_supervisor = $request->input('project_supervisor');

    // Handle file upload
    if ($request->hasFile('file')) {
        $filePath = $request->file('file')->store('public/uploads');
        $chapter->file_path = $filePath;

        // Extract and store the file name
        $chapter->file_name = pathinfo($filePath, PATHINFO_BASENAME);
    }

    // Check the deadline
    $currentDateTime = Carbon::now();
    $deadline = Deadline::where('chatper_name', $chapter->chapter_name)
        ->where('supevisor_name', $chapter->project_supervisor)
        ->first(); // Ensure you get the actual record

    if ($deadline && $currentDateTime->greaterThan($deadline->due_date)) {
        notify()->error('The deadline for the expected chapter has passed.');
        // dd('The deadline for the expected chapter has passed.');
        return view('student.chapter');
    }

    // Save the new Chapter instance to the database
    if ($chapter->save()) {
        // Retrieve all chapters associated with the matric_no
        $chapters = Chapter::where('matric_no', $matricNo)->get();

        notify()->success('Your project has been submitted successfully.');
        return view('projects.projectList', ['chapter' => $chapters]);
    } else {
        // Handle save failure
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
        $chapter = Chapter::where('matric_no', session('matric_no'))->get();
        // notify()->success('Your Project has been deleted Successfully');
        // drakify('success');
        // emotify('success', 'You are awesome, your data was successfully created');
        smilify('success', 'Project Successfully deleted');

        return view('projects.projectList',['chapter' => $chapter]);
        // return redirect(route('student.projectList'));
      
    }  
       // public function projectList($chapter){
    //     // Assuming 'chapter' is the name of a column in your Chapter model
    //     $chapters = Chapter::where('matric_no', session('matric_no'))
    //                        ->where('chapter_name', $chapter)
    //                        ->get();
    
    //     return view('projects.projectList', ['chapters' => $chapters]);
    // }
}
