<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    //
    // public function index(Chapter $chapter, $evaluation_id){
    //     $matricNo = session('matric_no');
    //     $chapter = Chapter::where('matric_no', session('matric_no'))->first();
    //     return view('student.evaluation', ['chapter' => $chapter]);
    // }

    public function index(Chapter $chapter, $evaluation_id){
         $chapter = Chapter::where('id', $evaluation_id)->first();
        // $chapter = Chapter::find($evaluation_id);
        return view('student.evaluation', ['chapter' => $chapter]);
    }

    public function chapterOne($student_id){
        $student = Chapter::findOrFail($student_id);
        return view('supervisor.feedbackchapterOne', compact('student'));
    }

    // public function store(Request $request)
    // {
    //     // Validate the incoming request data
    //     $validatedData = $request->validate([
    //         'student_id' => 'required',
    //         'feedback' => 'required|string',
    //         'backgroundOfStudy' => 'required|string',
    //         'statementOfTheProject' => 'required|string',
    //         'aimsAndObjectives' => 'required|string',
    //         'significanceOftheProject' => 'required|string',
    //         'organizationOfTheProject' => 'required|string',
    //     ]);
    //     $student = Chapter::findOrFail($request->input('student_id'));
    //     $student->feedback = $request->input('feedback');
    //     $student->backgroundOfStudy = $request->input('backgroundOfStudy');
    //     $student->statementOfTheProject = $request->input('statementOfTheProject');
    //     $student->aimsAndObjectives = $request->input('aimsAndObjectives');
    //     $student->significanceOfTheProject = $request->input('significanceOftheProject');
    //     $student->organizationOfTheProject = $request->input('organizationOfTheProject');
    //     $student->justificationOfStudy = $request->input('justificationOfStudy');
    //     dd($request->all());

    //     $student->update();


    //     // return redirect()->route('status.status')->with('msg', 'Feedback updated successfully.');        
    //     // // Update the feedback
    //     // $student->feedback = $request->input('feedback');
    //     // $student->save();   
    //     // Redirect back or to a feedback summary page with a success message
    //     // return redirect()->back()->with('success', 'Feedback submitted successfully!');
    // }
    
    public function store(Request $request)
    {
        // Validate request
        $validatedData = $request->validate([
            'student_id' => 'required|exists:chapters,id',
            'feedback' => 'required|string',
            'backgroundOfStudy' => 'required|string',
            'statementOfProblem' => 'required|string', // ✅ Fixed
            'aimsAndObjectives' => 'required|string',
            'justificationOfStudy' => 'required|string',
            'significanceOfStudy' => 'required|string', // ✅ Fixed
            'organizationOfProject' => 'required|string', // ✅ Fixed
        ]);
    
        // Find student record
        $student = Chapter::find($request->student_id);
    
        if (!$student) {
            return redirect()->back()->with('error', 'Student record not found.');
        }
    
        // Update the record
        $student->update($validatedData);
    
        return redirect()->back()->with('success', 'Feedback updated successfully!');
    }
    

}
