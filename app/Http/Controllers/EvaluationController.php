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

         
        if ($chapter->chapter_name == "Chapter One") {
            return view('evaluation.chapterOneEvaluation', ['chapter' => $chapter]);
        } elseif ($chapter->chapter_name == "Chapter Two") {
            return view('evaluation.chapterTwoEvaluation', ['chapter' => $chapter]);
        } elseif ($chapter->chapter_name == "Chapter Three") {
            return view('evaluation.chapterThreeEvaluation', ['chapter' => $chapter]);
        } elseif ($chapter->chapter_name == "Chapter_Four") {
            return view('evaluation.chapterFourEvaluation', ['chapter' => $chapter]);
        }

        // $chapter = Chapter::find($evaluation_id);
        // return view('student.evaluation', ['chapter' => $chapter]);
    }

    public function chapterOne($student_id){
        $student = Chapter::findOrFail($student_id);
        return view('supervisor.feedbackchapterOne', compact('student'));
    }
    
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
            'chapterOneApproval' => 'required|string',
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

    public function chapterTwo($student_id){
        $student = Chapter::findOrFail($student_id);
        return view('supervisor.feedbackchapterTwo', compact('student'));
    }

    public function storeTwo(Request $request)
    {
        // Validate request
        $validatedData = $request->validate([
            'student_id' => 'required|exists:chapters,id',
            'feedback' => 'required|string',
            'theoriticalFramework' => 'required|string',
            'reviewOfRelatedWork' => 'required|string',
            'identificationOfResearchGaps' => 'required|string',
            'justificationOfStudy' => 'required|string',
            'citationAndReferencing' => 'required|string',
            'logicalOrganization' => 'required|string',
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

    public function chapterThree($student_id){
        $student = Chapter::findOrFail($student_id);
        return view('supervisor.feedbackchapterThree', compact('student'));
    }

    public function storeThree(Request $request)
    {
        // Validate request
        $validatedData = $request->validate([
            'student_id' => 'required|exists:chapters,id',
            'feedback' => 'required|string',
            'researchDesign' => 'required|string',
            'dataCollectionMethods' => 'required|string',
            'requirements' => 'required|string',
            'tools' => 'required|string',
            'justificationOfMethodology' => 'required|string',
            'ethicalConsoderation' => 'required|string',
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

    public function chapterFour($student_id){
        $student = Chapter::findOrFail($student_id);
        return view('supervisor.feedbackchapterFour', compact('student'));
    }

    public function storeFour(Request $request)
    {
        // Validate request
        $validatedData = $request->validate([
            'student_id' => 'required|exists:chapters,id',
            'feedback' => 'required|string',
            'systemImplementation' => 'required|string',
            'uiux' => 'required|string',
            'features' => 'required|string',
            'testcases' => 'required|string',
            'systemDemonstration' => 'required|string',
            'researchObjectives' => 'required|string',
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

    public function chapterFive($student_id){
        $student = Chapter::findOrFail($student_id);
        return view('supervisor.feedbackchapterFive', compact('student'));
    }

    public function storeFive(Request $request)
    {
        // Validate request
        $validatedData = $request->validate([
            'student_id' => 'required|exists:chapters,id',
            'feedback' => 'required|string',
            'summaryOfFindings' => 'required|string',
            'contributionOfKnowledge' => 'required|string',
            'limitationsOfStudy' => 'required|string',
            'recommendationOfFutureWork' => 'required|string',
            'conclusion' => 'required|string',
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
