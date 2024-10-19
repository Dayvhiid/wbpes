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
            'student_id' => 'required',
            'feedback' => 'required|string',
            'title_evaluation' => 'required|string',
            'methodology_evaluation' => 'required|string',
            'literature_review_evaluation' => 'required|string',
            'research_question_evaluation' => 'required|string',
            'data_collection_evaluation' => 'required|string',
            'data_analysis_evaluation' => 'required|string',
            'conclusion_evaluation' => 'required|string',
            'presentation_quality_evaluation' => 'required|string',
        ]);
        $student = Chapter::findOrFail($request->input('student_id'));
        $student->feedback = $request->input('feedback');
        $student->title_evaluation = $request->input('title_evaluation');
        $student->methodology_evaluation = $request->input('title_evaluation');
        $student->literature_review_evaluation = $request->input('literature_review_evaluation');
        $student->research_question_evaluation = $request->input('research_question_evaluation');
        $student->data_collection_evaluation = $request->input('data_collection_evaluation');
        $student->data_analysis_evaluation = $request->input('data_analysis_evaluation');
        $student->conclusion_evaluation = $request->input('conclusion_evaluation');
        $student->presentation_quality_evaluation = $request->input('presentation_quality_evaluation');
        $student->save();
        return redirect()->route('status.status')->with('msg', 'Feedback updated successfully.');

        // Create a new feedback entry in the database
        // Feedback::create([
        //     'project_id' => $validatedData['project_id'],
        //     'supervisor_id' => $validatedData['supervisor_id'],
        //     'title_evaluation' => $validatedData['title_evaluation'],
        //     'methodology_evaluation' => $validatedData['methodology_evaluation'],
        //     'literature_review_evaluation' => $validatedData['literature_review_evaluation'],
        //     'research_question_evaluation' => $validatedData['research_question_evaluation'],
        //     'data_collection_evaluation' => $validatedData['data_collection_evaluation'],
        //     'data_analysis_evaluation' => $validatedData['data_analysis_evaluation'],
        //     'conclusion_evaluation' => $validatedData['conclusion_evaluation'],
        //     'presentation_quality_evaluation' => $validatedData['presentation_quality_evaluation'],
            
        // ]);

        // $request->validate([
        //     'student_id' => 'required',
        //     'feedback' => 'required|string',
        // ]);

        // // Retrieve the student record
        // $student = Chapter::findOrFail($request->input('student_id'));
        
        // // Update the feedback
        $student->feedback = $request->input('feedback');
        $student->save();
        

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
