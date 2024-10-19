<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    //
    public function FeedBackController(){
        
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'project_id' => 'required|exists:projects,id',
            'supervisor_id' => 'required|exists:supervisors,id',
            'title_evaluation' => 'required|in:meets,does_not_meet',
            'methodology_evaluation' => 'required|in:meets,does_not_meet',
            'literature_review_evaluation' => 'required|in:meets,does_not_meet',
            'research_question_evaluation' => 'required|in:meets,does_not_meet',
            'data_collection_evaluation' => 'required|in:meets,does_not_meet',
            'data_analysis_evaluation' => 'required|in:meets,does_not_meet',
            'conclusion_evaluation' => 'required|in:meets,does_not_meet',
            'presentation_quality_evaluation' => 'required|in:meets,does_not_meet',
            'comments' => 'nullable|string',
        ]);

        // Create a new feedback entry in the database
        Feedback::create([
            'project_id' => $validatedData['project_id'],
            'supervisor_id' => $validatedData['supervisor_id'],
            'title_evaluation' => $validatedData['title_evaluation'],
            'methodology_evaluation' => $validatedData['methodology_evaluation'],
            'literature_review_evaluation' => $validatedData['literature_review_evaluation'],
            'research_question_evaluation' => $validatedData['research_question_evaluation'],
            'data_collection_evaluation' => $validatedData['data_collection_evaluation'],
            'data_analysis_evaluation' => $validatedData['data_analysis_evaluation'],
            'conclusion_evaluation' => $validatedData['conclusion_evaluation'],
            'presentation_quality_evaluation' => $validatedData['presentation_quality_evaluation'],
            'comments' => $validatedData['comments'],
        ]);

        // $request->validate([
        //     'student_id' => 'required',
        //     'feedback' => 'required|string',
        // ]);

        // // Retrieve the student record
        // $student = Chapter::findOrFail($request->input('student_id'));
        
        // // Update the feedback
        // $student->feedback = $request->input('feedback');
        // $student->save();
        

        // Redirect back or to a feedback summary page with a success message
        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }

    // public function store(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'student_id' => 'required',
    //         'feedback' => 'required|string',
    //     ]);

    //     // Retrieve the student record
    //     $student = Chapter::findOrFail($request->input('student_id'));
        
    //     // Update the feedback
    //     $student->feedback = $request->input('feedback');
    //     $student->save();
        
    //     // Redirect back with success message
    //     return redirect()->route('status.status')->with('msg', 'Feedback updated successfully.');
    // }
}
